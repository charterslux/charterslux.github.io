<?php namespace Site\User;

use API\Exception\ValidationException;
use Validator;

class UserSubscribeValidator {

	/**
	 * @param UserSubscribeCommand $command
	 *
	 * @return mixed
	 * @throws
	 */
	public function validate($command)
	{
		$validator = Validator::make(
			['email' => $command->email],
			['email' => 'required|email|unique:subscriptions']
		);

		if($validator->fails())
			throw new ValidationException($validator->errors());
	}
}