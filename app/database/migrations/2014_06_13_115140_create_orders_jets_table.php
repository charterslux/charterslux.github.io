<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersJetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('orders_jets');
		Schema::create('orders_jets', function(Blueprint $table)
		{
			$table->integer('order_id')->unsigned();
			$table->integer('jet_id')->unsigned();

			$table->primary(['order_id','jet_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders_jets');
	}

}
