<?php namespace Site\User;

use Auth;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;
use User;

class UserRegisterCommandHandler implements CommandHandler{

	use DispatchableTrait;

	/**
	 * Handle the command
	 *
	 * @param UserRegisterCommand $command
	 *
	 * @return mixed
	 */
	public function handle($command)
	{
		$user = User::register($command->email, $command->password, $command->client_data);

		$this->dispatchEventsFor($user);

		Auth::login($user, TRUE);

		return $user;
	}}