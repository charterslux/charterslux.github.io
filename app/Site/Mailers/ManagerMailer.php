<?php namespace Site\Mailers;

use Client;
use Config;
use Order;

class ManagerMailer extends Mailer
{

    public function sendManagerNotifierAboutNewOrder($orderId)
    {
        $order  = Order::with('airport_from', 'airport_to')->withTrashed()->find($orderId);
        $client = Client::with('user', 'citizenship', 'suffix')->find($order->client_id);

        $message_data = [
            'order'  => $order->toArray(),
            'client' => $client->toArray(),
            'user'   => ($client->user) ? $client->user->toArray() : [],
        ];

        $subject = trans('emails.order_title', ['order_id' => $order->id]);
        $view    = 'emails.manager.newOrder';
        $this->sendTo(Config::get('mail.broker.address'), $subject, $view, $message_data);
    }
}