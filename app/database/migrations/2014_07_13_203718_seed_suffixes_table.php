<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedSuffixesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$seeder = new SuffixesTableSeeder();
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

		Suffix::truncate();

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
