<?php namespace Site\Listeners;

use Laracasts\Commander\Events\EventListener;
use Site\Mailers\ManagerMailer;
use Site\Mailers\UserMailer;
use Site\Order\Events\OrderChangeStatusToSend;
use Site\User\Events\UserRegistered;
use Site\User\Events\UserSubscribed;

class EmailNotifier extends EventListener
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
     * @param UserMailer    $userMailer
     * @param ManagerMailer $managerMailer
     */
    public function __construct(UserMailer $userMailer, ManagerMailer $managerMailer)
    {
        $this->userMailer    = $userMailer;
        $this->managerMailer = $managerMailer;
    }

    /**
     * @param OrderChangeStatusToSend $event
     */
    public function whenOrderChangeStatusToSend(OrderChangeStatusToSend $event)
    {
        $this->userMailer->sendNotificationAboutSendingOrderToUs($event->order);
        $this->managerMailer->sendManagerNotifierAboutNewOrder($event->order);
    }

    /**
     * Отправка письма пользователю об успешной регистрации
     *
     * @param UserRegistered $event
     */
    public function whenUserRegistered(UserRegistered $event)
    {
        $this->userMailer->sendWelcomeMessageTo($event->user, $event->client);
    }

    /**
     * Отправка письма при подписке на новости
     *
     * @param UserSubscribed $event
     *
     * @throws \API\Exception\InternalErrorException
     */
    public function whenUserSubscribed(UserSubscribed $event)
    {
        $this->userMailer->sendThanksForSubscriptionTo($event->subscription->email);
    }
}