<?php namespace Site\Order;

use Auth;
use Carbon\Carbon;
use Client;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use Laracasts\Commander\Events\EventGenerator;
use Order;
use Site\Order\Events\OrderCreated;
use User;

class CreateOrderCommandHandler implements CommandHandler
{
    use DispatchableTrait;
    use EventGenerator;
    /**
     * Handle the command
     *
     * @param CreateOrderCommand $command
     *
     * @return mixed
     */
    public function handle($command)
    {
        $user_id = Auth::id();
        /** @var User|null $user */
        $user   = ($user_id) ? User::find($user_id) : null;
        $client = ($user_id) ? $user->client : null;

        if ( ! $client AND $user_id) {
            $client = Client::create(['user_id' => $user_id]);
        }

        $client_id = ($client) ? $client->id : null;
        $order_id  = intval($command->id, null);
        /** @var Order|null $order */
        $order = null;

        if ($order_id) {
            $order = Order::find($order_id);
        }

        $departure_at = Carbon::createFromFormat('d.m.Y H:i', $command->departure_date . ' ' . $command->departure_time);

        if ( ! $order) {
            Order::create([
                    'user_id'         => $user_id,
                    'client_id'       => $client_id,
                    'airport_from_id' => $command->airport_from,
                    'airport_to_id'   => $command->airport_to,
                    'departure_at'    => $departure_at,
                    'passengers'      => $command->passengers,
                ]
            );
        } else {
            $order->update([
                    'airport_from_id' => $command->airport_from,
                    'airport_to_id'   => $command->airport_to,
                    'departure_at'    => $departure_at,
                    'passengers'      => $command->passengers,
                ]
            );
        }
    }
}