<?php namespace Site\User;

use Auth;
use Laracasts\Commander\CommandHandler;
use User;

class UserChangePasswordCommandHandler implements CommandHandler {

	/**
	 * Handle the command
	 *
	 * @param UserChangePasswordCommand $command
	 *
	 * @return mixed
	 */
	public function handle($command)
	{
		$user = User::find(Auth::user()->id);

		$user->password = $command->password;
		$user->save();

		return $user;
	}
}