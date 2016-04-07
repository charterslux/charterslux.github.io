<?php namespace Site\Mailers;

use Client;
use I18n;
use Order;
use User;

/**
 * Class UserMailer
 *
 * @package Site\Mailers
 */
class UserMailer extends Mailer {

	/**
	 * Отправка приветственного письма после регистрации
	 *
	 * @param User   $user
	 * @param Client $client
	 *
	 * @throws \API\Exception\InternalErrorException
	 */
	public function sendWelcomeMessageTo(User $user, Client $client)
	{
		$subject = trans('emails.subjects.registration');
		$view = 'emails.user.registered';
		$this->sendTo($user->email, $subject, $view);
	}

	/**
	 * Оправка письма с благодарностью за подписку
	 *
	 * @param $email
	 *
	 * @throws \API\Exception\InternalErrorException
	 */
	public function sendThanksForSubscriptionTo($email)
	{
		$subject = trans('emails.subjects.subscription');
		$view = 'emails.subscribe';
		$this->sendTo($email, $subject, $view);
	}

	/**
	 * Отправка письма-оповещения о новой заявке
	 *
	 * @param Order $order
	 *
	 * @throws \API\Exception\InternalErrorException
	 */
	public function sendNotificationAboutSendingOrderToUs($orderId)
	{
		$order = Order::with('user')->withTrashed()->find($orderId);
		$user  = $order->user;

		$subject = trans('emails.subjects.sendOrderNotification');
		$view    = 'emails.user.sendOrderNotification';
		$this->sendTo($user->email, $subject, $view);
	}

	/**
	 * Отправка письма с инструкциями по сбросу пароля
	 *
	 * @param $email
	 * @param $view
	 * @param $data
	 *
	 * @throws \API\Exception\InternalErrorException
	 */
	public function sendPasswordResetLinkTo($email, $view, $data)
	{
		$subject = trans('emails.subjects.resetPassword');
		$this->sendTo($email, $subject, $view, $data);
	}
}