<?php namespace Site\User\Events;

use Subscription;

class UserSubscribed {

	public $subscription;

	/**
	 * @param Subscription $subscription
	 */
	function __construct($subscription)
	{
		$this->subscription = $subscription;
	}
}