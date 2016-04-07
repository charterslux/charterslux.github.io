<?php namespace API\Transformers;

use Illuminate\Foundation\Application;

/**
 * Class CountryTransformer
 * @package API\Transformers
 */
class CountryTransformer extends Transformer {

	/**
	 * @param $item
	 *
	 * @return mixed
	 */
	public function transform($item)
	{
		$current_locale = \App::getLocale();

		$name = ($current_locale == 'ru')
			? array_get($item, 'name_ru')
			: array_get($item, 'name')
			;

		return [
			'id' => array_get($item, 'id'),
			'name' => $name,
			'iso_code' => array_get($item, 'iso_code'),
		];
	}
}