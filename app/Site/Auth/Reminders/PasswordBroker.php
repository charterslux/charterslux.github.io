<?php namespace Site\Auth\Reminders;

use Closure;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\ReminderRepositoryInterface;
use Illuminate\Auth\UserProviderInterface;
use Illuminate\Mail\Mailer;
use Site\Mailers\UserMailer;

class PasswordBroker extends \Illuminate\Auth\Reminders\PasswordBroker {

	/**
	 * @var UserMailer
	 */
	private $userMailer;

	/**
	 * @param ReminderRepositoryInterface $reminders
	 * @param UserProviderInterface       $users
	 * @param Mailer|UserMailer           $mailer
	 * @param string                      $reminderView
	 * @param UserMailer                  $userMailer
	 */
	public function __construct(ReminderRepositoryInterface $reminders,
	                            UserProviderInterface $users,
	                            Mailer $mailer,
	                            $reminderView,
								UserMailer $userMailer)
	{
		$this->users = $users;
		$this->mailer = $mailer;
		$this->reminders = $reminders;
		$this->reminderView = $reminderView;
		$this->userMailer = $userMailer;
	}

	/**
	 * Send the password reminder e-mail.
	 *
	 * @param  \Illuminate\Auth\Reminders\RemindableInterface  $user
	 * @param  string    $token
	 * @param  \Closure  $callback
	 * @return int
	 */
	public function sendReminder(RemindableInterface $user, $token, Closure $callback = null)
	{
		// We will use the reminder view that was given to the broker to display the
		// password reminder e-mail. We'll pass a "token" variable into the views
		// so that it may be displayed for an user to click for password reset.
		$view = $this->reminderView;

		$this->userMailer->sendPasswordResetLinkTo($user->getReminderEmail(), $view, compact('token', 'user'));
	}
}