<?php namespace API\helpers;

use API_AuthFilter;
use Str;

/**
 * Class Factory
 * @package API\helpers
 */
trait Factory {

	/**
	 * @var int
	 */
	protected $times = 1;

	/**
	 * @param int $times
	 */
	public function times($times)
	{
		$this->times = $times;

		return $this;
	}

	/**
	 * @param $user
	 *
	 * @return array
	 */
	protected function get_auth_data($user)
	{
		$auth_filter = new API_AuthFilter();
		$salt = Str::random(8);
		$token = $auth_filter->get_token($user->id, $salt);
		$auth_data = array(
			'user'  => $user->id,
			'token' => $token,
			'salt'  => $salt,
		);

		return $auth_data;
	}
}