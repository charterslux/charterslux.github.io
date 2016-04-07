<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedDirectories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$seeder = new DirectoriesSeeder();
		$seeder->run();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		if(getenv('TESTING_DB_DRIVER') == 'sqlite')
		{
			DB::statement('PRAGMA foreign_keys = OFF;');
		}
		else
		{
			DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		}

		Client::truncate();
		User::truncate();
		Country::truncate();
		Airport_Contact::truncate();
		Airport::truncate();
		Jet_Type::truncate();
		Jet_Class::truncate();
		Jet_Maker::truncate();
		Order_Status::truncate();
		Client_Type::truncate();

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
