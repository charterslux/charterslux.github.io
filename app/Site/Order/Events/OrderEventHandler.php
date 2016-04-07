<?php namespace Site\Order\Events;

use Illuminate\Events\Dispatcher;
use Site\Mailers\ManagerMailer;
use Site\Mailers\UserMailer;

class OrderEventHandler
{

    /**
     * @var UserMailer
     */
    private $userMailer;
    /**
     * @var ManagerMailer
     */
    private $managerMailer;

    /**
     * OrderEventHandler constructor.
     *
     * @param UserMailer    $userMailer
     * @param ManagerMailer $managerMailer
     */
    public function __construct(UserMailer $userMailer, ManagerMailer $managerMailer)
    {
        $this->userMailer    = $userMailer;
        $this->managerMailer = $managerMailer;
    }

    /**
     * @param $orderId
     */
    public function whenOrderRegistered($orderId)
    {
//        $this->userMailer->sendNotificationAboutSendingOrderToUs($orderId);
        $this->managerMailer->sendManagerNotifierAboutNewOrder($orderId);
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Dispatcher $events
     *
     * @return array
     */
    public function subscribe($events)
    {
        $events->listen('order.registered', 'Site\Order\Events\OrderEventHandler@whenOrderRegistered');
    }
}