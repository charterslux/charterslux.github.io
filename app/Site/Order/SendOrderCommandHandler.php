<?php namespace Site\Order;

use API\Exception\NotFoundException;
use API\Exception\WrongOwnerException;
use Auth;
use Laracasts\Commander\CommanderTrait;
use Laracasts\Commander\CommandHandler;
use Order;

class SendOrderCommandHandler implements CommandHandler {

	use CommanderTrait;

	/**
	 * Handle the command
	 *
	 * @param $command
	 *
	 * @return mixed
	 */
	public function handle($command)
	{
		$order = Order::with('user', 'client', 'legs', 'legs.airport_from', 'legs.airport_to', 'jet_makers', 'jet_classes')->find($command->order_id);

		if( ! $order)
			throw new NotFoundException(trans('messages.order.not_found'));

		if($order->user->id != Auth::user()->id)
			throw new WrongOwnerException(trans('messages.order.not_owned'));

		if($order->status_id > 1)
			throw new NotFoundException(trans('messages.order.already_send'));

		$result = $this->execute(SendOrderInERPCommand::class, ['order' => $order]);

		return $result;
	}
}