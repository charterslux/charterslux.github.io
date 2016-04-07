<?php

return array(
	'default' => getenv('TESTING_DB_DRIVER'),

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => getenv('TESTING_SQLITE_DB_PATH'),
			'prefix'   => '',
		),

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => getenv('DATABASE_NAME'),
			'username'  => getenv('DATABASE_USER'),
			'password'  => getenv('DATABASE_PASS'),
			'charset'   => 'utf8',
			'collation' => 'utf8_general_ci',
			'prefix'    => '',
		),
	),

);
