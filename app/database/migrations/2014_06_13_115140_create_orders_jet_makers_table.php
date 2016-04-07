<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersJetMakersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('orders_jet_makers');
		Schema::create('orders_jet_makers', function(Blueprint $table)
		{
			$table->integer('order_id')->unsigned();
			$table->smallInteger('jet_maker_id')->unsigned();

			$table->primary(['order_id','jet_maker_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders_jet_makers');
	}

}
