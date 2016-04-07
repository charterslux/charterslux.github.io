<?php
use Laracasts\Commander\Events\EventGenerator;
use Site\User\Events\UserSubscribed;

class Subscription extends Eloquent {

	use EventGenerator;

	/**
	 * Fillable while mass assign columns
	 */
	protected $fillable = ['email'];
	protected $table = 'subscriptions';
	public $timestamps = true;

	/**
	 * @param $email
	 *
	 * @return Subscription
	 */public static function add($email)
	{
		$subscription = static::create(['email' => $email]);

		$subscription->raise(new UserSubscribed($subscription));

		return $subscription;
	}
}