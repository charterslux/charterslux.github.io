<?php

class DirectoriesSeeder extends Seeder {

	public function run()
	{
		if (App::environment() === 'production')
			exit('I just stopped you getting fired.');

		Eloquent::unguard();

		if(getenv('TESTING_DB_DRIVER') == 'sqlite')
		{
			DB::statement('PRAGMA foreign_keys = OFF;');
		}
		else
		{
			DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		}

		$this->call('CountriesTableSeeder');
		$this->call('CitiesTableSeeder');
		$this->call('AirportsTableSeeder');
		$this->call('AirportContactsTableSeeder');
		$this->call('JetClassesTableSeeder');
		$this->call('JetMakersTableSeeder');
		$this->call('JetTypesTableSeeder');
		$this->call('OrderStatusesTableSeeder');
		$this->call('ClientTypesTableSeeder');

		if(getenv('TESTING_DB_DRIVER') == 'sqlite')
		{
			DB::statement('PRAGMA foreign_keys = ON;');
		}
		else
		{
			DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		}
	}

}