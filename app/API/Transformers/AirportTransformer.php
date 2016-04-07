<?php namespace API\Transformers;


class AirportTransformer extends Transformer {

	public function transform($airport)
	{
		$current_locale = \App::getLocale();
		$airport_name = array_get($airport, 'name');
		$airport_name_ru = array_get($airport, 'name_ru');
		$city_name = array_get($airport, 'city_name');
		$city_name_ru = array_get($airport, 'city_name_ru');
		$country_name = array_get($airport, 'country_name');
		$country_name_ru = array_get($airport, 'country_name_ru');
		return [
			'id'           =>  array_get($airport, 'id'),
			'country'      => ($current_locale == 'ru' AND $country_name_ru) ? $country_name_ru : $country_name,
			'city'         => ($current_locale == 'ru' AND $city_name_ru)    ? $city_name_ru : $city_name,
			'airport_name' => ($current_locale == 'ru' AND $airport_name_ru) ? $airport_name_ru : $airport_name,
			'iata_code'    =>  array_get($airport, 'iata_code'),
			'icao_code'    =>  array_get($airport, 'icao_code'),
			'lat'          =>  array_get($airport, 'latitude'),
			'lng'          =>  array_get($airport, 'longitude'),
		];
	}

	public function transformObject($airport)
	{

		$airport_arr = [
			'id' => $airport->id,
			'name' => $airport->name,
			'name_ru' => $airport->name_ru,
			'city_name' => $airport->city->name,
			'city_name_ru' => $airport->city->name_ru,
			'country_name' => $airport->city->country->name,
			'country_name_ru' => $airport->city->country->name_ru,
			'iata_code' => $airport->iata_code,
			'icao_code' => $airport->icao_code,
			'latitude' => $airport->latitude,
			'longitude' => $airport->longitude,

		];

		return $this->transform($airport_arr);
	}
}