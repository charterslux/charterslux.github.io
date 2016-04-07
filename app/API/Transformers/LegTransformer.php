<?php namespace API\Transformers;


class LegTransformer extends Transformer {

	private $time_intervals = [
		0 => '00:00 - 06:00',
		1 => '06:00 - 12:00',
		2 => '12:00 - 18:00',
		3 => '18:00 - 24:00',
	];

	/**
	 * @var AirportTransformer
	 */
	private $airportTransformer;

	/**
	 * @param AirportTransformer $airportTransformer
	 */
	function __construct(AirportTransformer $airportTransformer)
	{
		$this->airportTransformer = $airportTransformer;
	}

	/**
	 * @param $item
	 *
	 * @return mixed
	 */
	public function transform($leg)
	{
		$time_interval_id =  array_get($leg, 'time_interval');
		$time_interval    = NULL;

		if($time_interval_id)
			$time_interval = array_get($this->time_intervals, $time_interval_id);

		return [
			'id'              => array_get($leg, 'id'),
			'order_id'        => array_get($leg, 'order_id'),
//			'airport_from_id' => array_get($leg, 'airport_from_id'),
//			'airport_to_id' => array_get($leg, 'airport_to_id'),
			'airport_from'    => $this->airportTransformer->transform(array_get($leg, 'airport_from')),
			'airport_to'      => $this->airportTransformer->transform(array_get($leg, 'airport_to')),
			'departure_time'  => array_get($leg, 'departure_time'),
			'time_interval'   => $time_interval,
			'flight_time'     => array_get($leg, 'flight_time'),
			'flight_time_abs' => array_get($leg, 'flight_time_abs'),
			'arrival_time'    => array_get($leg, 'arrival_time'),
			'passengers'      => array_get($leg, 'passengers'),
		];
	}

	public function transformObject($leg)
	{
		$time_interval_id =  $leg->time_interval;
		$time_interval    = NULL;

		if($time_interval_id)
			$time_interval = array_get($this->time_intervals, $time_interval_id);

		return [
			'id'              => $leg->id,
			'order_id'        => $leg->order_id,
			'airport_from'    => $this->airportTransformer->transformObject($leg->airport_from),
			'airport_to'      => $this->airportTransformer->transformObject($leg->airport_to),
			'departure_date'  => $leg->departure_time->format(i18n_date_format()),
			'time_interval'   => $time_interval,
			'flight_time'     => $leg->flight_time,
			'flight_time_abs' => $leg->flight_time_abs,
			'arrival_time'    => $leg->arrival_time,
			'passengers'      => $leg->passengers,
		];
	}
}