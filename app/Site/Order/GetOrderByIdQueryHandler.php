<?php namespace Site\Order;

use Laracasts\Commander\CommandHandler;
use Order;

class GetOrderByIdQueryHandler implements CommandHandler
{

    /**
     * Handle the command
     *
     * @param GetOrderByIdQuery $command
     *
     * @return Order
     */
    public function handle($command)
    {
        return Order::find($command->id);
    }
}