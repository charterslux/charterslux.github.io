<?php

/**
 * AuthController
 *
 * @route Route::get('/', 'AuthController@index');
 * @project dev.anywayjet.com
 * @author Sergey Gladkovskiy <smgladkovskiy@gmail.com>
 */

class AuthController extends BaseController {

	public function getLogin()
	{
		if(Auth::check())
			return Redirect::to(I18n::localizeURL('user/cabinet'));

		return View::make('forms.auth.login');
	}

	public function getLogout()
	{
		try
		{
			Auth::logout();
		}
		catch(Exception $e)
		{
			Log::error($e);
		}

		return Redirect::to(I18n::localizeURL('/'));
	}

	public function getRegister()
	{
		if(Auth::check())
			return Redirect::to(I18n::localizeURL('user/cabinet'));

		return View::make('forms.auth.register');
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getPasswordReset($token = null)
	{
		if (is_null($token)) App::abort(404);

		return View::make('forms.auth.password_reset')
			->with('token', $token)
			;
	}
}
