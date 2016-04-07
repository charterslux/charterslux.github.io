<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdersJetTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders_jet_types', function(Blueprint $table)
		{
			$table->foreign('order_id')
				->references('id')
				->on('orders')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('jet_type_id')
				->references('id')
				->on('jet_types')
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
		Schema::table('orders_jet_types', function(Blueprint $table)
		{
			$table->dropForeign('orders_jet_types_order_id_foreign');
			$table->dropForeign('orders_jet_types_jet_type_id_foreign');
		});
	}

}
