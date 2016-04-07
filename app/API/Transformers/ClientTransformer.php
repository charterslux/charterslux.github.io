<?php namespace API\Transformers;


class ClientTransformer extends Transformer {

	/**
	 * @param $client
	 *
	 * @return mixed
	 */
	public function transform($client)
	{
		$current_locale = \App::getLocale();
		$citizenship_arr = array_get($client, 'citizenship');
		$citizenship = ($citizenship_arr)
			? [
				'id'       => array_get($citizenship_arr, 'id'),
				'iso_code' => array_get($citizenship_arr, 'iso_code'),
				'name'     => ($current_locale == 'ru')  ? array_get($citizenship_arr, 'name_ru') : array_get($citizenship_arr, 'name'),
			]
			: [
				'id'       => NULL,
				'iso_code' => NULL,
				'name'     => NULL,
				'name_ru'  => NULL,
			]
		;
		$suffix_arr = array_get($client, 'suffix');
		$suffix = ($suffix_arr)
			? trans('suffixes.'.array_get($suffix_arr, 'alias'))
			: NULL
		;
		$user = array_get($client, 'user');

		return [
			'client' => [
				'id'         => array_get($client, 'id'),
				'last_name'  => array_get($client, 'last_name'),
				'first_name' => array_get($client, 'first_name'),
				'patronymic' => array_get($client, 'patronymic'),
				'suffix'     => $suffix,
				'borned_at'  => array_get($client, 'borned_at'),
				'phone_number'  => array_get($client, 'phone_number'),
				'passport'  => array_get($client, 'passport'),
				'citizenship'  => $citizenship,
			],
			'user' => [
				'id' => array_get($user, 'id'),
				'email' => array_get($user, 'email'),
			]
		];
	}
}