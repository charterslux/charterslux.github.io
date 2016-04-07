<?php namespace API;

use Airport;
use API\helpers\APITester;
use Country;
use Str;
use User;

/**
 * ClassCatalogTest
 *
 * @package API
 * @coversDefaultClass API\CatalogController
 */
class CatalogTest extends APITester {

	/**
	 * @test
	 * @covers ::getSearchAirport
	 */
	public function it_searches_airports_from_query()
	{
		$query = ['term' => Str::random(3)];
		$airports = $this->getJsonWithSuccess('/api/catalog/airport', 'GET', $query)->data;

		if( ! $airports)
			$this->it_searches_airports_from_query();

		$this->check_airport_data($airports);
	}

	/**
	 * @test
	 * @covers ::getAirport
	 */
	public function it_gets_airport_data_by_id()
	{
		$airports_ids = Airport::lists('id');
		$airport = $this->getJsonWithSuccess('/api/catalog/airport/'.$this->fake->randomElement($airports_ids))->data;

		$this->check_airport_data($airport);
	}

	/**
	 * @test
	 * @covers ::getClasses
	 */
	public function it_gets_classes()
	{
		$classes = $this->getJsonWithSuccess('/api/catalog/classes')->data;

		foreach($classes as $class)
			$this->assertObjectHasAttributes($class, 'id', 'name');
	}

	/**
	 * @test
	 * @covers ::getMakers
	 */
	public function it_gets_makers()
	{
		$makers = $this->getJsonWithSuccess('/api/catalog/makers')->data;

		foreach($makers as $maker)
			$this->assertObjectHasAttributes($maker, 'id', 'name');
	}

	/**
	 * @test
	 * @covers ::getCatalog
	 */
	public function it_gets_jet_types()
	{
		$classes_ids = \Jet_Class::lists('id');
		$makers_ids = \Jet_Maker::lists('id');

		$rand_makers_num = rand(1,count($makers_ids));

		while($rand_makers_num-- != 0)
		{
			$maker_id = $this->fake->randomElement($makers_ids);
			$makers[$maker_id] = $maker_id;
		}

		$query = [
			'makers' => array_values($makers),
			'class' => $this->fake->randomElement($classes_ids),
			'page' => 2,
		];
		$jet_types = $this->getJsonWithSuccess('/api/catalog', 'GET', $query);

		foreach($jet_types->data as $jet_type)
		{
			$this->assertObjectHasAttributes($jet_type,
				'id', 'name', 'class_id', 'maker_id', 'class_name', 'maker_name', 'description', 'flight_range', 'max_flight_height',
				'max_speed', 'min_pax', 'max_pax', 'length', 'height', 'luggage_bay_volume', 'production_from', 'production_to'
			);
		}

		$this->assertRespondPagination($jet_types);
	}

	/**
	 * @test
	 * @covers ::getSearchCountries
	 */
	public function it_searches_countries_from_query()
	{
		$query = ['term' => 'рос'];

		$countries = $this->getJsonWithSuccess('/api/catalog/countries', 'GET', $query)->data;

		$this->check_country_data($countries);
	}

	/**
	 * @test
	 * @covers ::getCountries
	 */
	public function it_gets_country_data_by_id()
	{
		$countries_ids = Country::lists('id');
		$country = $this->getJsonWithSuccess('/api/catalog/countries/'.$this->fake->randomElement($countries_ids))->data;

		$this->check_country_data($country);
	}

	/**
	 * @param $airports
	 * @internal param array|Airport $airports
	 */
	private function check_airport_data($airports)
	{
		if(is_array($airports))
		{
			foreach($airports as $airport)
			{
				$this->check_airport_data($airport);
			}
		}
		else
		{
			$this->assertObjectHasAttributes($airports, 'id', 'country', 'city', 'airport_name', 'iata_code', 'icao_code', 'lat', 'lng');
		}
	}

	/**
	 * @param $countries
	 * @internal param array|Country $country
	 */
	private function check_country_data($countries)
	{
		if(is_array($countries))
		{
			foreach($countries as $country)
				$this->assertObjectHasAttributes($country, 'id', 'name', 'iso_code');
		}
		else
		{
			$this->assertObjectHasAttributes($countries, 'id', 'name', 'iso_code');
		}
	}
}
