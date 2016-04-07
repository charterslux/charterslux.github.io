<?php namespace Site\Client;

use API\Exception\ValidationException;
use App;
use I18n;
use Validator;

class ClientEditValidator {
	/**
	 * @param ClientEditCommand $command
	 *
	 * @return mixed
	 * @throws
	 */
	public function validate($command)
	{
		$date_format = i18n_date_format();

		$current_location = I18n::getCurrentLocale();

		App::setLocale($command->preferred_language);

		$validator = Validator::make([
			'borned_at'    => $command->borned_at,
			'phone_number' => $command->phone_number,
			'last_name'    => $command->last_name,
			'first_name'   => $command->first_name,
			'suffix'       => $command->suffix,
		], [
			'borned_at'    => 'date|date_format:'.$date_format,
			'phone_number' => 'sometimes|required',
			'last_name'    => 'sometimes|required',
			'first_name'   => 'sometimes|required',
			'suffix'       => 'required'
		], [

		],
		[
			'last_name'    => trans('forms.labels.last_name'),
			'first_name'   => trans('forms.labels.first_name'),
			'phone_number' => trans('forms.labels.phone_number'),
			'borned_at'    => trans('forms.labels.borned_at'),
			'suffix'       => trans('forms.labels.suffix'),
		]);


		if($validator->fails())
			throw new ValidationException($validator->errors());

		App::setLocale($current_location);
	}
}