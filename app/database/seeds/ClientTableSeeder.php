<?php

class ClientTableSeeder extends Seeder {

    public function run()
    {
	    $users = User::all();
	    $faker = Faker\Factory::create();
	    $countries = Country::lists('id');
	    foreach($users as $user)
	    {
		    try
		    {
			    $client = Client::create(array(
				    'type_id'        => 1,
				    'user_id'        => $user->id,
				    'first_name'     => $faker->firstName,
				    'last_name'      => $faker->lastName,
				    'sex'            => rand(1, 2),
				    'citizenship_id' => $faker->randomElement($countries),
				    'phone_number'   => rand(0, 1) ? $faker->phoneNumber : NULL,
				    'borned_at'      => $faker->dateTimeBetween('-60 years', '-18 years')->format('d.m.Y'),
			    ));
		    }
		    catch(InvalidArgumentException $e)
		    {
			    die(\Kint::dump($e->getMessage(), $e->getFile(), $e->getTraceAsString()));
		    }
	    }
    }

}