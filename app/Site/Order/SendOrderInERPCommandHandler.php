<?php namespace Site\Order;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class SendOrderInERPCommandHandler implements CommandHandler {

	use DispatchableTrait;

	/**
	 * Handle the command
	 *
	 * @param SendOrderInERPCommand $command
	 *
	 * @return mixed
	 */
	public function handle($command)
	{
		$order = $command->order;

		$order = $order->sendInERP();

		$this->dispatchEventsFor($order);

		return TRUE;
	}
}