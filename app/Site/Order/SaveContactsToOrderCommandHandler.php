<?php namespace Site\Order;

use Client;
use Event;
use Laracasts\Commander\CommandHandler;
use Order;
use User;

class SaveContactsToOrderCommandHandler implements CommandHandler
{

    /**
     * Handle the command
     *
     * @param SaveContactsToOrderCommand $command
     *
     * @return mixed
     */
    public function handle($command)
    {
        $client = Client::where('phone_number', '=', (new Client())->numberize($command->contactPhone));

        if ($command->contactEmail) {
            $client->orWhereHas('user',
                function ($query) use ($command) {
                    $query->where('email', '=', $command->contactEmail);
                }
            );
        }

        $client = $client->first();

        if ( ! $client) {

            $user = null;
            if ($command->contactEmail) {
                $user = User::create(['email' => $command->contactEmail]);
            }

            $client               = new Client();
            $client->first_name   = $command->contactName;
            $client->phone_number = $command->contactPhone;

            if ($user) {
                $client->user_id = $user->id;
            }

            $client->save();
        }

        /** @var Order $order */
        $order = Order::find($command->orderId);;
        $order->client_id = $client->id;

        if ($client->user_id) {
            $order->user_id = $client->user_id;
        }
        
        $order->save();

        Event::fire('order.registered', [$order->id]);
    }
}