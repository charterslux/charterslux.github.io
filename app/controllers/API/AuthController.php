<?php namespace API;

use API_AuthFilter;
use Auth;
use I18n;
use Illuminate\Foundation\Application;
use Input;
use Lang;
use Password;
use Request;
use Site\User\UserRegisterCommand;
use URL;
use User;

/**
 * AuthController Ajax Controller
 *
  * @namespace API
 * @route Route::get('/', 'AuthController@index');
 * @project dev.anywayjet.com
 * @author Sergey Gladkovskiy <smgladkovskiy@gmail.com>
 */
class AuthController extends BaseController {

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyLogin()
	{
		$email    = Input::get('email');
		$password = Input::get('password');

		if( ! $email OR ! $password)
			return $this->respondWithBadRequest(trans('messages.auth.email_or_pass_empty'));

		if (Auth::viaRemember() OR Auth::attempt(array('email' => $email, 'password' => $password), TRUE))
		{
			$user_id = Auth::user()->id;
			$remember_token = Auth::user()->remember_token;
			return $this
				->setRedirectUrl(I18n::localizeURL(Request::header('referer')))
				->setData(['user' => $user_id, 'api_key' => $remember_token])
				->respondWithSuccess(trans('messages.auth.loginSuccess'));
		}

		return $this->respondUnauthorized(trans('validation.custom.wrong_pass_or_email'));
	}

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyLogout()
	{
		if(Auth::check())
		{
			Auth::logout();
			return $this
				->setRedirectUrl(I18n::localizeURL('/'))
				->respondWithSuccess(trans('messages.auth.logout_success'));
		}

		return $this
			->setRedirectUrl(I18n::localizeURL('/'))
			->respondWithBadRequest(trans('messages.auth.need_auth'));
	}

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function anyRegister()
	{
		if (Auth::check())
		{
			$referrer = URL::previous();
			return $this
				->setRedirectUrl(($referrer) ? $referrer : URL::full())
				->respondWithBadRequest(trans('messages.auth.already_logged_in'));
		}

		$user = $this->execute(UserRegisterCommand::class);

		return $this
			->setRedirectUrl(URL::previous())
			->setData([
				'user'    => $user->id,
				'api_key' => Auth::user()->remember_token
			])
			->respondWithSuccess(trans('messages.auth.registration_success'));
	}

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getLoggedin()
	{
		$auth_filter      = new API_AuthFilter();
		$can_be_logged_in = FALSE;
		$code             = 401;
		$user_id          = intval(Input::get('user'));
		$token            = Input::get('token');
		$api_salt         = Input::get('salt');

		if( ! $user_id)
			return $this
				->setData($can_be_logged_in)
				->respondWithBadRequest('User not defined');

		if( ! $token)
			return $this
				->setData($can_be_logged_in)
				->respondWithBadRequest('Token not set')
				;

		$request_token = $auth_filter->get_token($user_id, $api_salt);

		if($request_token instanceof Response)
			return Response::json(array('data' => $can_be_logged_in), $code);

		if($request_token == $token)
		{
			$can_be_logged_in = TRUE;
			$code = 200;
		}

		return Response::json(array('data' => $can_be_logged_in), $code);
	}

	/**
	 * Handle a POST request to remind a user of their password.
	 *
	 * @return Response
	 */
	public function anyPasswordRemind()
	{
		$response = Password::remind(Input::only('email'), function($message){
			$message->subject(trans('emails.password.reminder.subject'));
		});

		switch ($response)
		{
			case Password::INVALID_USER:
				return $this->respondWithBadRequest(Lang::get('errors.'.$response));

			case Password::REMINDER_SENT:
				return $this->respondWithSuccess(Lang::get('messages.'.$response));
		}
	}

	/**
	 * Handle a POST request to reset a user's password.
	 *
	 * @return Response
	 */
	public function postPasswordReset()
	{
		$credentials = Input::only(
			'email', 'password', 'password_confirmation', 'token'
		);

		$user_object = NULL;

		$response = Password::reset($credentials, function($user, $password) use (&$user_object)
		{
			$user->password = $password;

			$user->save();
			$user_object = $user;
		});

		switch ($response)
		{
			case Password::INVALID_PASSWORD:
			case Password::INVALID_TOKEN:
			case Password::INVALID_USER:
				return $this->respondWithBadRequest(Lang::get($response));

			case Password::PASSWORD_RESET:

				if($user_object)
				{
					Auth::login($user_object, TRUE);
					$this->setRedirectUrl(I18n::localizeURL('/'));
				}
				else
				{
					$this->setRedirectUrl(I18n::localizeURL('/'));
				}

				return $this->respondWithSuccess('Пароль успешно сброшен');
		}
	}
}