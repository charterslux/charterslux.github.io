<?php namespace Site\Order;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use Order;

class SetOrderCommandHandler implements CommandHandler {

	use DispatchableTrait;

    /**
     * Handle the command.
     *
     * @param  SetOrderCommand $command
     * @return Order
     */
    public function handle($command)
    {
	    $order = Order::set($command);

	    $this->dispatchEventsFor($order);

	    return $order;
    }

}