<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdersJetClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders_jet_classes', function(Blueprint $table)
		{
			$table->foreign('order_id')
				->references('id')
				->on('orders')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('jet_class_id')
				->references('id')
				->on('jet_classes')
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
		Schema::table('orders_jet_classes', function(Blueprint $table)
		{
			$table->dropForeign('orders_jet_classes_order_id_foreign');
			$table->dropForeign('orders_jet_classes_jet_class_id_foreign');
		});
	}

}
