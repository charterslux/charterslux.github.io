<?php  namespace Site\Order;

use Order;

class SendOrderInERPCommand {

	public $order;

	/**
	 * @param Order $order
	 */
	function __construct($order)
	{
		$this->order = $order;
	}
}