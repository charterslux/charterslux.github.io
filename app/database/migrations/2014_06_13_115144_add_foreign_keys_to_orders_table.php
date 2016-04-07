<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders', function(Blueprint $table)
		{
			$table->foreign('client_id')
				->references('id')
				->on('clients')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('status_id')
				->references('id')
				->on('order_statuses')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orders', function(Blueprint $table)
		{
			$table->dropForeign('orders_client_id_foreign');
			$table->dropForeign('orders_user_id_foreign');
			$table->dropForeign('orders_status_id_foreign');
		});
	}

}
