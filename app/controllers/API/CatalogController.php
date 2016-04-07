<?php namespace API;

use Airport;
use API\Traits\JetTrait;
use API\Traits\JetTypeTrait;
use API\Transformers\AirportTransformer;
use API\Transformers\CountryTransformer;
use API\Transformers\JetClassTransformer;
use API\Transformers\JetMakerTransformer;
use API\Transformers\JetTypeTransformer;
use Auth;
use Country;
use Illuminate\Database\Eloquent\Builder;
use Input;
use Jet_Class;
use Jet_Maker;
use Jet_Type;
use Log;
use Order;
use XML_RPC2_CurlException;
use XMLRPC_Proxy;

/**
 * CatalogController Ajax Controller
 *
 * @namespace Ajax
 * @route Route::get('/', 'CatalogController@index');
 * @author Sergey Gladkovskiy <smgladkovskiy@gmail.com>
 */

class CatalogController extends BaseController {

	use JetTypeTrait;
	use JetTrait;

	/**
	 * @var AirportTransformer
	 */
	protected $airportTransformer;

	/**
	 * @var JetClassTransformer
	 */
	protected $jetClassTransformer;

	/**
	 * @var JetMakerTransformer
	 */
	protected $jetMakerTransformer;

	/**
	 * @var JetTypeTransformer
	 */
	protected $jetTypeTransformer;

	/**
	 * @var CountryTransformer
	 */
	protected $countryTransformer;

	/**
	 * @param Transformers\AirportTransformer  $airportTransformer
	 * @param Transformers\JetClassTransformer $jetClassTransformer
	 * @param Transformers\JetMakerTransformer $jetMakerTransformer
	 * @param Transformers\JetTypeTransformer  $jetTypeTransformer
	 * @param Transformers\CountryTransformer  $countryTransformer
	 */
	function __construct(AirportTransformer $airportTransformer, JetClassTransformer $jetClassTransformer, JetMakerTransformer $jetMakerTransformer, JetTypeTransformer $jetTypeTransformer, CountryTransformer $countryTransformer)
	{
		$this->airportTransformer  = $airportTransformer;
		$this->jetClassTransformer = $jetClassTransformer;
		$this->jetMakerTransformer = $jetMakerTransformer;
		$this->jetTypeTransformer  = $jetTypeTransformer;
		$this->countryTransformer  = $countryTransformer;
	}

	/**
	 * @param null $apId
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getAirport($apId = NULL)
	{
		if( ! $apId)
		{
			return $this->getSearchAirport();
		}
		else
		{
			$airport = Airport::with('city', 'city.country')->find(intval($apId));

			if( ! $airport)
				return $this->respondNotFound(trans('errors.airport_not_found'));

			return $this->respond([
				'data' => $this->airportTransformer->transformObject($airport)
			]);
		}
	}

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getSearchAirport()
	{
		$city_name = Input::get('term', NULL).'%';

		$airports = Airport::select([
			'airports.*',
			'cities.id as city_id',
			'cities.name as city_name',
			'cities.name_ru as city_name_ru',
			'countries.id as country_id',
			'countries.name as country_name',
			'countries.name_ru as country_name_ru',
		])
			->whereNotNull('icao_code')
			->leftJoin('cities',    'airports.city_id',  '=', 'cities.id')
			->leftJoin('countries', 'cities.country_id', '=', 'countries.id')
		;

		if($city_name)
			$airports = $airports
				->where(function(Builder $query) use ($city_name)
				{
					$query
						->where('airports.name',        'like', $city_name)
						->orWhere('airports.name_ru',   'like', $city_name)
						->orWhere('airports.iata_code', 'like', $city_name)
						->orWhere('airports.icao_code', 'like', $city_name)
						->orWhere('cities.name',        'like', $city_name)
						->orWhere('cities.name_ru',     'like', $city_name)
						->orWhere('countries.name',     'like', $city_name)
						->orWhere('countries.name_ru',  'like', $city_name)
					;
				})
			;

		$airports = $airports->take(7)->get()->toArray();

		return$this->respond([
			'data' => $this->airportTransformer->transformCollection($airports)
		]);
	}

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getClasses()
	{
		$classes = Jet_Class::orderBy('id')->get()->toArray();

		return $this->respond([
			'data' => $this->jetClassTransformer->transformCollection($classes)
		]);
	}

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getMakers()
	{
		$makers = Jet_Maker::orderBy('name')->get()->toArray();

		return $this->respond([
			'data' => $this->jetMakerTransformer->transformCollection($makers)
		]);
	}

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getCatalog()
	{
		$makers = Input::get('makers', array());
		$class  = Input::get('class', array());

		$jets_types_raw = Jet_Type::with(array('jet_class', 'jet_maker'))
			->orderBy('class_id')
		;

		if($makers or $class)
			$jets_types_raw->where(function($query) use ($makers, $class)
			{
				if($makers)
				{
					$query->orWhereIn('maker_id', $makers);
				}

				if($class)
				{
					$query->orWhere('class_id', $class);
				}
			});

		$jets_types_raw = $jets_types_raw->paginate(5);

		return $this->respondWithPagination($jets_types_raw, [
			'data' => $this->jetTypeTransformer->transformCollection($jets_types_raw->all()),
		]);
	}

	/**
	 * @param null $countryId
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getCountries($countryId = NULL)
	{
		if( ! $countryId)
			return $this->getSearchCountries();

		$country = Country::find(intval($countryId));

		if( ! $country)
			return $this->respondNotFound(trans('errors.country_not_found'));

		return $this->respond([
			'data' => $this->countryTransformer->transform($country->toArray())
		]);
	}

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getSearchCountries()
	{
		$term = Input::get('term');

		$countries = Country::select('*');

		if($term)
			$countries = $countries->where('name', 'like', '%'.$term.'%')->orWhere('name_ru', 'like', '%'.$term.'%');

		$countries = $countries->take(5)->get()->toArray();

		return $this->respond([
			'data' => $this->countryTransformer->transformCollection($countries)
		]);
	}

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getTails()
	{
		$can_be_deleted = FALSE;
		$order_id = Input::get('order');
		$order = Order::find($order_id);

		if(!$order)
			return $this->respondNotFound(trans('errors.order_not_found'));

		if($order->user_id AND Auth::check())
		{
			$user_id = Auth::id();

			if($user_id != $order->user_id)
				return $this->respondNotFound(trans('errors.order_not_found'));
		}
		elseif($order->user_id AND ! Auth::check())
		{
			return $this->respondForbidden();
		}
		elseif( ! $order->user_id AND Auth::check())
		{
			return $this->respondForbidden();
		}

		if($order->status->id == 1)
			$can_be_deleted = TRUE;

		$tails_arr = $order->tails;
		$tail_numbers = [];

		if($tails_arr)
			$tail_numbers = array_values(array_pluck($tails_arr, 'jet_tail_number'));

		$tails = [];
		if($tail_numbers)
		{
			try
			{
				$rpc  = new XMLRPC_Proxy('flight.aircraft');
				$jets = $rpc('search_aircrafts', $tail_numbers);
			}
			catch(XML_RPC2_CurlException $e)
			{
				Log::error($e);

				return $this->respondInternalError(trans('errors.erp_connection_failed'));
			}
			if($jets)
			{

				$_jet_types = Jet_Type::with('jet_class', 'jet_maker')->whereIn('name', array_pluck($jets, 'jet_type'))->get();

				if($_jet_types)
					$_jet_types = $this->jetTypeTransformer->transformCollection($_jet_types->toArray());

				$jet_types =[];
				foreach($_jet_types as $jet_type)
				{
					$jet_types[$jet_type['name']] = $jet_type;
				}

				foreach($jets as $jet)
				{
					$jet_type = $jet_types[$jet['jet_type']];
					$images = $this->getJetPictures(
						array_get($jet, 'external_id'),
						array_get($jet, 'tail')
					);
					$tail = array_get($tails_arr, $jet['tail'], []);

					$more_data = [
						'jet_picture'        => $this->getJetTypePicture($jet_types[$jet['jet_type']]['id']),
						'fly_price'          => array_get($tail, 'fly_price'),
						'jet_operator'       => array_get($tail, 'jet_operator'),
						'jet_tail_number'    => array_get($jet, 'tail'),
						'images'             => $images,
						'jet_class_id'       => array_get($jet_type, 'class_id'),
						'jet_class'          => array_get($jet_type, 'class_name'),
						'jet_maker_id'       => array_get($jet_type, 'maker_id'),
						'jet_maker'          => array_get($jet_type, 'maker_name'),
						'jet_model'          => array_get($jet_type, 'name'),
						'jet_type'           => array_get($jet_type, 'name'),
						'jet_type_id'        => array_get($jet_type, 'id'),
						'jet_capacity'       => array_get($jet_type, 'min_pax') .'-'. array_get($jet_type, 'max_pax'),
						'yom'                => array_get($jet, 'yom'),
						'fly_price_currency' => 'EUR',
						'delete'             => $can_be_deleted,
						'order'              => $order->id,
					];

					$tails[] = array_merge(
						$jet,
						$jet_types[$jet['jet_type']],
						$more_data
					);
				}


			}
		}

		return $this->respond(['data' => array_values($tails)]);
	}
}
