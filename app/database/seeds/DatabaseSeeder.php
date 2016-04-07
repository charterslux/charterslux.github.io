<?php

class DatabaseSeeder extends Seeder {

	private $tables = array(
		'users',
		'clients'
	);

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		if (App::environment() === 'production')
			exit('I just stopped you getting fired. Sergey');

		Eloquent::unguard();

		$this->cleanDatabase();

		$this->call('UserTableSeeder');
		$this->call('ClientTableSeeder');
	}

	/**
	 * @param $tables
	 */
	private function cleanDatabase()
	{
		if(getenv('TESTING_DB_DRIVER') == 'sqlite')
		{
			DB::statement('PRAGMA foreign_keys = OFF;');
		}
		else
		{
			DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		}

		foreach($this->tables as $table)
			$tables[] = DB::table($table)->truncate();

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
