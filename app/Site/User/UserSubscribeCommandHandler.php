<?php namespace Site\User;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use Subscription;

class UserSubscribeCommandHandler implements CommandHandler {

	use DispatchableTrait;

	/**
	 * Handle the command.
	 *
	 * @param object $command
	 *
	 * @return mixed|Subscription
	 */
    public function handle($command)
    {
		$subscription = Subscription::add($command->email);

	    $this->dispatchEventsFor($subscription);

	    return $subscription;
    }

}