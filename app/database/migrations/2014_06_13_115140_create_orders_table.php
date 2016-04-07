<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('orders');
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('erp_id')->nullable();
			$table->tinyInteger('status_id')->unsigned()->default(1);
			$table->integer('client_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned()->nullable();

			$table->text('tails')->nullable();

			$table->boolean('food')->default(0);
			$table->boolean('stewardess')->default(0);
			$table->boolean('ap_services')->default(0);
			$table->boolean('conference_hall')->default(0);
			$table->boolean('phone')->default(0);
			$table->boolean('drinks')->default(0);
			$table->boolean('transfer')->default(0);
			$table->boolean('internet')->default(0);

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
		Schema::drop('orders');
	}

}
