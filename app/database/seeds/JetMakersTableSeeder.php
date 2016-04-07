<?php

class JetMakersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		Jet_Maker::truncate();

		$jet_makers = array (
			array (
				'id' => 1,
				'name' => 'Airbus Industrie'
			),

			array (
				'id' => 2,
				'name' => 'Bombardier Aerospace'
			),

			array (
				'id' => 3,
				'name' => 'Cessna Aircraft Company'
			),

			array (
				'id' => 4,
				'name' => 'Dassault Aviation'
			),

			array (
				'id' => 5,
				'name' => 'Embraer'
			),

			array (
				'id' => 6,
				'name' => 'Gulfstream Aerospace Corporation'
			),

			array (
				'id' => 7,
				'name' => 'Hawker Beechcraft'
			),

			array (
				'id' => 8,
				'name' => 'The Boeing Company'
			),

			array (
				'id' => 9,
				'name' => 'АКБ Туполева'
			),

			array (
				'id' => 10,
				'name' => 'АКБ Яковлева'
			),

			array (
				'id' => 11,
				'name' => 'АКБ Сухого'
			),

			array (
				'id' => 12,
				'name' => 'АКБ Антонова'
			),

			array (
				'id' => 13,
				'name' => 'Honda Aircraft'
			),

			array (
				'id' => 14,
				'name' => 'Cirrus Aircraft'
			),

			array (
				'id' => 15,
				'name' => 'Diamond Aircraft'
			),

			array (
				'id' => 16,
				'name' => 'Eclipse Aerospace'
			),
		);
		foreach($jet_makers as $jet_maker)
		{
			Jet_Maker::create($jet_maker);
		}
	}

}
