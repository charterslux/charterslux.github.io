<?php namespace Site\Order\Events;

use Order;

class OrderCreated {

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