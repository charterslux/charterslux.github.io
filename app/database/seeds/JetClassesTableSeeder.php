<?php

class JetClassesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		Jet_Class::truncate();

		$jet_classes = array (
			0 => array (
				'id' => 1,
				'name' => 'Small'
			),
			1 => array (
				'id' => 2,
				'name' => 'Average'
			),
			2 => array (
				'id' => 3,
				'name' => 'Large'
			),
			3 => array (
				'id' => 4,
				'name' => 'Long-haul'
			),
		);

		foreach($jet_classes as $jet_class)
			Jet_Class::create($jet_class);
	}

}
