<?php namespace Site\User;

use API\Exception\ValidationException;
use Validator;

class UserRegisterValidator {

	/**
	 * @param UserRegisterCommand $command
	 *
	 * @return mixed
	 * @throws
	 */
	public function validate($command)
	{
		$client_data = $command->client_data;

		$client_data = ($client_data)
			? array_only($client_data, ['phone_number', 'last_name', 'first_name', 'suffix_id', 'preferred_language'])
			: NULL;

		$client_validation_array = [];
		$client_validation_rules = [];

		if($client_data)
		{
			$client_validation_array = [
				'phone_number'       => array_get($client_data, 'phone_number'),
				'last_name'          => array_get($client_data, 'last_name'),
				'first_name'         => array_get($client_data, 'first_name'),
				'suffix_id'          => array_get($client_data, 'suffix_id'),
				'preferred_language' => array_get($client_data, 'preferred_language')
			];
			$client_validation_rules = [
				'phone_number'       => 'required|min:10',
				'last_name'          => 'required|min:2',
				'first_name'         => 'required|min:2',
				'suffix_id'          => 'required',
				'preferred_language' => 'required'
			];
		}

		$validator = Validator::make(
			[
				'email'                 => $command->email,
				'password'              => $command->password,
				'password_confirmation' => $command->password_confirmation,
			]+$client_validation_array,
			[
				'email'    => 'required|email|unique:users',
				'password' => 'required|min:4|confirmed',
			]+$client_validation_rules,
			[],
			[
				'email'                 => trans('forms.placeholders.email'),
				'password'              => trans('forms.placeholders.password'),
				'password_confirmation' => trans('forms.placeholders.password_confirmation'),
				'phone_number'          => trans('forms.placeholders.phone'),
				'last_name'             => trans('forms.placeholders.last_name'),
				'first_name'            => trans('forms.placeholders.first_name'),
				'suffix_id'             => trans('forms.placeholders.suffix'),
				'preferred_language'    => trans('forms.placeholders.preferred_language'),
			]
		);

		if($validator->fails())
			throw new ValidationException($validator->errors());
	}
}