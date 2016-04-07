<?php namespace Site\User;

class UserChangePasswordCommand {

	public $old_password;
	public $password;
	public $password_confirmation;

	/**
	 * @param $old_password
	 * @param $password
	 * @param $password_confirmation
	 */
	function __construct($old_password, $password, $password_confirmation)
	{
		$this->old_password = $old_password;
		$this->password = $password;
		$this->password_confirmation = $password_confirmation;
	}
}