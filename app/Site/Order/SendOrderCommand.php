<?php namespace Site\Order;

class SendOrderCommand {

	public $order_id;

	/**
	 * @param $order_id
	 */
	function __construct($order_id)
	{
		$this->order_id = $order_id;
	}
}