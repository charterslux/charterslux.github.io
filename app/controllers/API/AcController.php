<?php namespace API;

use Airport;
use API\Traits\JetTrait;
use API\Traits\JetTypeTrait;
use API\Transformers\JetClassTransformer;
use API\Transformers\JetMakerTransformer;
use Illuminate\Support\Facades\Log;
use Input;
use Jet_Class;
use Jet_Maker;
use Jet_Type;
use Paginator;
use XMLRPC_Proxy;

class AcController extends BaseController {

	use JetTypeTrait;
	use JetTrait;

	/**
	 * @var JetMakerTransformer
	 */
	protected $jetMakerTransformer;

	/**
	 * @var JetClassTransformer
	 */
	protected $jetClassTransformer;

	function __construct(JetMakerTransformer $jetMakerTransformer, JetClassTransformer $jetClassTransformer)
	{
		$this->jetMakerTransformer = $jetMakerTransformer;
		$this->jetClassTransformer = $jetClassTransformer;
	}

	/**
	 * @deprecated
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyClasses_Makers()
	{
		$legs_distance = $this->get_legs_distance();

		if( ! is_array($legs_distance))
			return $legs_distance;

		$max_distance = array_get($legs_distance, 'distance');

		$_jet_types = Jet_Type::with('jet_maker', 'jet_class')
			->where('flight_range', '>=', $max_distance)
			->groupBy('class_id', 'maker_id')
			->get()
		;

		$jet_classes = array();
		$jet_makers  = array();
		foreach($_jet_types as $jet_type)
		{
			$jet_classes[$jet_type->jet_class->id] = $jet_type->jet_class->toArray();
			$jet_makers[$jet_type->jet_maker->id] = $jet_type->jet_maker->toArray();;
		}

		return $this->respond([
			'data' => [
				'ac_classes' => $this->jetClassTransformer->transformCollection(array_values($jet_classes)),
				'ac_makers'  => $this->jetMakerTransformer->transformCollection(array_values($jet_makers)),
			]
		]);
	}

	/**
	 * Замена classes_makers
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyClasses()
	{
		$legs_distance = $this->get_legs_distance();

		if( ! is_array($legs_distance))
			return $legs_distance;

		$max_distance  = array_get($legs_distance, 'distance');

		$_jet_types = Jet_Type::with('jet_class')
			->where('flight_range', '>=', $max_distance)
			->groupBy('class_id')
			->get()
			->toArray()
		;

		return $this->respond([
			'data' => $this->jetClassTransformer->transformCollection($_jet_types)
		]);
	}

	public function anyMakers()
	{
		$legs_distance = $this->get_legs_distance();

		if( ! is_array($legs_distance))
			return $legs_distance;

		$max_distance  = array_get($legs_distance, 'distance');
		$classes       = $this->get_classes();

		$_jet_types = Jet_Type::with('jet_maker')
			->where('flight_range', '>=', $max_distance)
			->whereIn('class_id', $classes)
			->groupBy('maker_id')
			->get()
			->toArray()
		;

		return $this->respond([
				'data' => $this->jetMakerTransformer->transformCollection($_jet_types)
			]
		);
	}

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyJets()
	{
		$legs_distance = $this->get_legs_distance();

		if( ! is_array($legs_distance))
			return $legs_distance;

		$max_distance = array_get($legs_distance, 'distance');
		$legs         = array_get($legs_distance, 'legs');
		$classes      = $this->get_classes();
		$makers       = $this->get_makers();
		$page         = Input::get('page', 1);

		$_jet_types = Jet_Type::where('flight_range', '>=', $max_distance)
			->where(function($q) use ($classes)
			{
				foreach($classes as $class)
					$q->orWhere('class_id', $class);
			})
			->where(function($q) use ($makers)
			{
				foreach($makers as $maker)
					$q->orWhere('maker_id', $maker);
			})
			->get()
		;

		$jet_types_arr = array();
		foreach($_jet_types as $jet_type)
			$jet_types_arr[] = $jet_type->id;

		$limit        = 5;
		$offset       = ($page == 1) ? 0 : $page*$limit;
		$offset_param = array('offset' => array($offset, $offset+$limit));
		$input_data = array(
				'jet_type' => $jet_types_arr,
				'legs'     => $legs,
				'tails'    => array(),
			)+$offset_param;

		$ERP_jets = array();
		if($input_data['legs'])
		{
			try
			{
//			$ERP_jets = Cache::remember(md5(serialize($input_data)), 3600, function() use($input_data)
//			{
				$rpc = new XMLRPC_Proxy();
				$ERP_jets = $rpc('search_available_ac2', $input_data);
//			});
			}
			catch(\XML_RPC2_CurlException $e)
			{
				Log::error($e);
				return $this->respondInternalError(trans('errors.erp_connection_failed'));
			}
		}
		$items = array_get($ERP_jets, 'results', array());

		$pagination = Paginator::make(
			$items,
			array_get($ERP_jets, 'count')-$limit,
			$limit
		);


		$jet_type_ids = array();
		foreach($items as $jet)
		{
			$jet_type_site_id = intval(array_get($jet, 'jet_type_site_id'));
			if($jet_type_site_id)
				$jet_type_ids[$jet_type_site_id] = $jet_type_site_id;
		}

		$_jet_types = array();
		if($jet_type_ids)
			$_jet_types = Jet_Type::with(array('jet_class', 'jet_maker'))
				->whereIn('id', $jet_type_ids)
				->get();

		$jet_types = array();
		foreach($_jet_types as $jet_type)
		{
			$jet_types[$jet_type->id] = $jet_type;
		}


		$jets = array();
		$items = array_get($ERP_jets, 'results', array());
		foreach($items as $ac)
		{

			$site_id  = intval(array_get($ac, 'jet_type_site_id'));
			$jet_type = array_get($jet_types, $site_id);

			$images = $this->getJetPictures($ac['external_id'], $ac['tail']);

			$price = number_format(array_get($ac, 'price'), 0, '', ' ');
			$price_for_member = number_format(array_get($ac, 'fly_member_price'), 0, '', ' ');

			if( ! $price_for_member)
				$price_for_member = number_format(array_get($ac, 'price')*0.95, 0, '', ' ');

			$jets[] = array(
				'jet_id'             => array_get($ac, 'external_id'),
				'jet_operator'       => array_get($ac, 'operator'),
				'jet_tail_number'    => array_get($ac, 'tail'),
				'jet_class_id'       => ($jet_type) ? $jet_type->jet_class->id : NULL,
				'jet_class'          => ($jet_type) ? trans('messages.jet.class.'.strtolower($jet_type->jet_class->name)) : NULL,
				'jet_maker_id'        => ($jet_type) ? $jet_type->jet_maker->id : NULL,
				'jet_maker'          => ($jet_type) ? $jet_type->jet_maker->name : NULL,
				'jet_model'          => ($jet_type) ? $jet_type->name : NULL,
				'jet_type'           => ($jet_type) ? $jet_type->name : NULL,
				'jet_type_id'        => ($jet_type) ? $jet_type->id : NULL,
				'jet_capacity'         => $jet_type->min_pax.' - '.$jet_type->max_pax,
				'yom'                => array_get($ac, 'YOM'),
				'jet_picture'        => $this->getJetTypePicture($jet_type->id),
				'fly_price'          => $price,
				'fly_member_price'   => $price_for_member,
				'fly_price_currency' => 'EUR',
				'images'             => $images,
				'select'             => true,
			);
		}

		return $this->respondWithPagination($pagination, ['data' => $jets], TRUE);
	}

	protected function get_legs_distance()
	{
		$_legs = Input::get('legs', array());

		$legs = array();
		$airports_ids = array();
		foreach($_legs as $leg)
		{
			$ac_from = array_get($leg, 'airport_from_id');
			$ac_to   = array_get($leg, 'airport_to_id');

			$airports_ids[$ac_from] = $ac_from;
			$airports_ids[$ac_to]   = $ac_to;
			$legs[] = array(
				'airport_from_id' => $ac_from,
				'airport_to_id' => $ac_to,
				'departure_time' => array_get($leg, 'departure_time'),
				'passengers' => array_get($leg, 'passengers'),
			);
		}

		$max_distance = 0;
		if($airports_ids)
		{
			$_airports = Airport::whereIn('id', array_values($airports_ids))
				->get();
			$airports = array();
			foreach($_airports as $airport)
			{
				$airports[$airport->id] = $airport;
			}
			$max_distance = 0;
			foreach($legs as $id => $leg)
			{
				$airport_from_id = array_get($leg, 'airport_from_id');
				$airport_to_id   = array_get($leg, 'airport_to_id');

				if( ! $airport_from_id OR ! $airport_to_id)
					return Response::json(array('error' => trans('errors.legs.airport_id_not_defined')), 400);

				$distance = $this->distance($airports[$airport_from_id], $airports[$airport_to_id]);

				$ap_from = array_get($airports, $leg['airport_from_id']);
				$ap_to   = array_get($airports, $leg['airport_to_id']);

				$legs[$id]['from'] = (is_object($ap_from)) ? $ap_from->icao_code : NULL;
				$legs[$id]['to']   = (is_object($ap_to))   ? $ap_to->icao_code   : NULL;
				$legs[$id]['date'] = date('c', array_get($leg, 'departure_time')/1000);
				$legs[$id]['pax']  = array_get($leg, 'passengers');
				$max_distance = ($max_distance < $distance) ? $distance : $max_distance;
			}
		}

		return array('distance' => $max_distance, 'legs' => $legs);
	}

	protected function get_classes()
	{
		$_classes = Input::get('class_ids', array());
		$classes = array();
		if($_classes)
		{
			if(!is_array($_classes))
			{
				$_classes = explode(',', $_classes);

				if(!is_array($_classes))
					$_classes = [$_classes];
			}

			foreach($_classes as $class)
			{
				$classes[] = intval($class);
			}
		}
		else
		{
			$classes = array_pluck(Jet_Class::select('id')->get()->toArray(), 'id');
		}

		return $classes;
	}

	protected function get_makers()
	{
		$_makers = Input::get('maker_ids', array());

		$makers = array();
		if($_makers)
		{
			if(!is_array($_makers))
			{
				$_makers = explode(',', $_makers);

				if(!is_array($_makers))
					$_makers = [$_makers];
			}

			foreach($_makers as $maker)
			{
				$makers[] = intval($maker);
			}
		}
		else
		{
			$makers = array_pluck(Jet_Maker::select('id')->get()->toArray(), 'id');
		}

		return $makers;
	}

	protected function distance(Airport $ap_from, Airport $ap_to)
	{
		$deg_to_rad = pi()/180;

		$distance = acos(
				sin($ap_from->latitude*$deg_to_rad) * sin($ap_to->latitude*$deg_to_rad)
				+
				cos($ap_from->latitude*$deg_to_rad) * cos($ap_to->latitude*$deg_to_rad) * cos($ap_from->longitude*$deg_to_rad - $ap_to->longitude*$deg_to_rad)
			) * 6372.8;

		return $distance;
	}
}
