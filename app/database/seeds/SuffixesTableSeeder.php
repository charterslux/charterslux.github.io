<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SuffixesTableSeeder extends Seeder {

	public function run()
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

		$suffixes = [ 'mr', 'miss', 'mrs', 'ms', 'dr', 'sir', 'lord', 'lady', 'prof'];

		foreach($suffixes as $suffix)
			Suffix::create(['alias' => $suffix]);

	}

}