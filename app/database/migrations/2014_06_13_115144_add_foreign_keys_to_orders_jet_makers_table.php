<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdersJetMakersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders_jet_makers', function(Blueprint $table)
		{
			$table->foreign('order_id')
				->references('id')
				->on('orders')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('jet_maker_id')
				->references('id')
				->on('jet_makers')
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
		Schema::table('orders_jet_makers', function(Blueprint $table)
		{
			$table->dropForeign('orders_jet_makers_order_id_foreign');
			$table->dropForeign('orders_jet_makers_jet_maker_id_foreign');
		});
	}

}
