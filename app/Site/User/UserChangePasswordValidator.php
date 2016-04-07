<?php namespace Site\User;

use API\Exception\ValidationException;
use Auth;
use Hash;
use User;
use Validator;

/**
 * Class UserChangePasswordValidator
 * @package Site\User
 */
class UserChangePasswordValidator {

	/**
	 * @param UserChangePasswordCommand $command
	 */
	public function validate($command)
	{
		/**
		 * @var User $user
		 */
		$user = User::find(Auth::user()->id);

		Validator::extend('correct_old_password', function($attribute, $value, $params) use ($user)
		{
			return Hash::check($value, $user->getAuthPassword());
		});

		$validator = Validator::make([
			'old_password'          => $command->old_password,
			'password'              => $command->password,
			'password_confirmation' => $command->password_confirmation,
		], [
			'old_password' => 'required|correct_old_password',
			'password'     => 'required|confirmed',
		], [
			'correct_old_password' => trans('messages.user.pass.old_pass_error'),
		], [
			'old_password'          => trans('forms.placeholders.old_password'),
			'password'              => trans('forms.placeholders.password'),
			'password_confirmation' => trans('forms.placeholders.password_again'),
		]);

		if($validator->fails())
			throw new ValidationException($validator->errors());
	}
}