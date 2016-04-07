<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdersJetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders_jets', function(Blueprint $table)
		{
			$table->foreign('order_id')
				->references('id')
				->on('orders')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('jet_id')
				->references('id')
				->on('jets')
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
		Schema::table('orders_jets', function(Blueprint $table)
		{
			$table->dropForeign('orders_jets_order_id_foreign');
			$table->dropForeign('orders_jets_jet_id_foreign');
		});
	}

}
