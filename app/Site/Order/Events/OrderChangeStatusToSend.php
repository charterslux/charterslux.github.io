<?php namespace Site\Order\Events;

use Order;

class OrderChangeStatusToSend {

	/**
	 * @var Order
	 */
	public $order;

	/**
	 * @param Order $order
	 */
	function __construct(Order $order)
	{
		$this->order = $order;
	}
}