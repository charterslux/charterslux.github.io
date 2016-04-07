<?php

class ClientTypesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
//		Client_Type::truncate();

		$client_types = array (
			0 => array (
				'id' => 1,
				'name' => 'Не подтверждённый'
			),
			1 => array(
				'id' => 2,
				'name' => 'Подтверждённый',
			),
		);

		foreach($client_types as $client_type)
			Client_Type::create($client_type);
	}

}
