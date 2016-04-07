<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersJetClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('orders_jet_classes');
		Schema::create('orders_jet_classes', function(Blueprint $table)
		{
			$table->integer('order_id')->unsigned();
			$table->boolean('jet_class_id')->unsigned();

			$table->primary(['order_id','jet_class_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders_jet_classes');
	}

}
