<?php

class API_AuthFilter {

	/**
	 * @var User|null
	 */
	public $user          = NULL;
	public $token         = NULL;
	public $api_salt      = NULL;
	public $request_token = NULL;

	/**
	 * Проверка авторизации для API
	 *
	 * @return \Illuminate\Http\JsonResponse|void
	 */
	public function check($log_in_user = TRUE)
	{
		if( ! Auth::check())
		{
			$user_id  = intval(Input::get('user'));
			$token    = Input::get('token');
			$api_salt = Input::get('salt');
			if(!$user_id)
			{
				return API\Response::json(array('error' => trans('messages.auth.can_not_auth')), 401);
			}
			if(!$token)
			{
				return API\Response::json(array('error' => trans('messages.auth.can_not_auth')), 401);
			}
			$request_token = $this->get_token($user_id, $api_salt);
			if($request_token instanceof Illuminate\Http\JsonResponse)
			{
				return $request_token;
			}
			$debug_data = array();
			if(App::environment() == 'dev')
			{
				$debug_data = array(
					'user_id'       => $this->user->id, 'remember_token' => $this->user->remember_token, 'api_salt' => $api_salt,
					'request_token' => $request_token,
				);
			}
			if($request_token !== $token)
			{
				return API\Response::json(array('error' => trans('messages.auth.token_error')) + $debug_data, 401);
			}
			if($log_in_user)
			{
				Auth::login($this->user, TRUE);
			}
		}
	}

	public function get_token($user_id, $api_salt)
	{
		$this->user = User::find($user_id);

		if( ! $this->user)
			return API\Response::json(array('error' => trans('messages.auth.can_not_auth')), 401);

		if( ! $this->user->getRememberToken())
		{
			$this->user->setRememberToken(str_random(60));
			$this->user->save();
		}

		$request_token = hash_hmac(
			'sha256',
			$this->user->id . $this->user->remember_token . $api_salt,
			getenv('ENC_KEY')
		);

		return $request_token;
	}

}