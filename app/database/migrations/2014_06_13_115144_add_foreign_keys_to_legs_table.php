<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLegsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('legs', function(Blueprint $table)
		{
			$table->foreign('airport_from_id')
				->references('id')
				->on('airports')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');
			$table->foreign('airport_to_id')
				->references('id')
				->on('airports')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');
			$table->foreign('client_id')
				->references('id')
				->on('clients')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('jet_id')
				->references('id')
				->on('jets')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('order_id')
				->references('id')
				->on('orders')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('legs', function(Blueprint $table)
		{
			$table->dropForeign('legs_airport_from_id_foreign');
			$table->dropForeign('legs_airport_to_id_foreign');
			$table->dropForeign('legs_client_id_foreign');
			$table->dropForeign('legs_jet_id_foreign');
			$table->dropForeign('legs_user_id_foreign');
			$table->dropForeign('legs_order_id_foreign');
		});
	}

}
