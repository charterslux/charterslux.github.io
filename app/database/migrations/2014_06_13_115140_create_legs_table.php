<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLegsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('legs');
		Schema::create('legs', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('airport_from_id')->unsigned();
			$table->integer('airport_to_id')->unsigned()->nullable();
			$table->integer('jet_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('client_id')->unsigned()->nullable();
			$table->integer('order_id')->unsigned()->nullable();

			$table->dateTime('departure_time')->nullable();
			$table->dateTime('arrival_time')->nullable();
			$table->smallInteger('flight_time')->unsigned()->nullable();
			$table->smallInteger('flight_time_abs')->unsigned()->nullable();
			$table->integer('passengers')->unsigned()->default(1);

			$table->boolean('is_confirmed')->default(0);
			$table->boolean('is_payed')->default(0);
			$table->boolean('is_done')->default(0);

			$table->timestamps();
			$table->softDeletes();

			$table->index('created_at');
			$table->index('updated_at');
			$table->index('deleted_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('legs');
	}

}
