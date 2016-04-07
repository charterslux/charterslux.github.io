<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create(array(
	        'id'       => 1,
	        'email'    => 'first_user@email.com',
	        'password' => 'password',
        ));

	    $faker = Faker\Factory::create();

	    for ($i = 2; $i < 5; $i++)
	    {
		    User::create(array(
			    'id'       => $i,
			    'email'    => $faker->email,
			    'password' => $faker->word,
		    ));
	    }
    }

}