<?php
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Leg extends Eloquent {
	protected $guarded    = ['id'];
	protected $fillable = [ 'airport_from_id', 'airport_to_id', 'departure_time', 'time_interval', 'flight_time', 'flight_abs', 'passengers', 'order_id', 'client_id', 'user_id'];
	use SoftDeletingTrait;
	public $timestamps = true;
	protected $dates = ['departure_time', 'deleted_at', 'created_at', 'updated_at'];

	/**
	 * @param Order $order
	 * @param array $leg
	 *
	 * @return Order|static
	 */
	public static function linkToOrder(Order $order, array $leg)
	{
		$timestamp = array_get($leg, 'departure_time', NULL)/1000;

		$departure_time = NULL;

		if($timestamp)
			$departure_time = Carbon::createFromTimestamp($timestamp);

		$time_interval =  array_get($leg, 'time_interval', NULL);

		$leg_data = array(
			'order_id'        => $order->id,
			'user_id'         => $order->user_id,
			'client_id'       => $order->client_id,
			'airport_from_id' => intval(array_get($leg, 'airport_from_id'), NULL),
			'airport_to_id'   => intval(array_get($leg, 'airport_to_id'), NULL),
			'departure_time'  => $departure_time,
			'time_interval'  => $time_interval,
			'passengers'      => array_get($leg, 'passengers', NULL),
		);

		$leg_id = intval(array_get($leg, 'id'), NULL);

		$_leg   = Leg::find($leg_id);

		if( ! $_leg)
		{
			$_leg =  Leg::create($leg_data);
		}
		else
		{
			$_leg->update($leg_data);
		}

		return $_leg;
	}

	public function order()
	{
		return $this->belongsTo('Order');
	}

	public function airport_from()
	{
		return $this->belongsTo('Airport');
	}

	public function airport_to()
	{
		return $this->belongsTo('Airport');
	}
}