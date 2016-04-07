<?php

class OrderStatusesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
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

		Order_Status::truncate();

		if(getenv('TESTING_DB_DRIVER') == 'sqlite')
		{
			DB::statement('PRAGMA foreign_keys = ON;');
		}
		else
		{
			DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		}


		$order_statuses = array (

			array (
				'id' => 1,
				'name' => 'created',
				'class' => 'danger',
			),

			array (
				'id' => 2,
				'name' => 'send',
				'class' => 'warning',
			),

			array (
				'id' => 3,
				'name' => 'confirmed',
				'class' => 'info',
			),

			array (
				'id' => 4,
				'name' => 'done',
				'class' => 'success',
			),

			array (
				'id' => 5,
				'name' => 'declined',
				'class' => 'active',
			),
		);
		foreach($order_statuses as $order_status)
		{
			Order_Status::create($order_status);
		}
	}

}
