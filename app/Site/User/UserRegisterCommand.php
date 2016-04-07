<?php namespace Site\User;

class UserRegisterCommand {

	public $email;
	public $password;
	public $client_data;
	public $password_confirmation;

	/**
	 * @param $email
	 * @param $password
	 * @param $password_confirmation
	 * @param $client
	 *
	 * @internal param $client_data
	 */
	function __construct($email, $password, $password_confirmation, $client)
	{
		$this->email    = $email;
		$this->password = $password;
		$this->password_confirmation = ($client) ? $password_confirmation : $password;
		$this->client_data   = $client;
	}
}