<?php namespace Site\User\Events;

use Client;
use User;

class UserRegistered {

	/**
	 * @var User
	 */
	public $user;
	/**
	 * @var Client
	 */
	public $client;

	/**
	 * @param User $user
	 */
	function __construct(User $user, Client $client = NULL)
	{
		$this->user   = $user;
		$this->client = $client;
	}
}