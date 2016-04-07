<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('jets');
		Schema::create('jets', function(Blueprint $table)
		{
			$table->increments('id');

			$table->smallInteger('jet_type_id')->unsigned();
			$table->integer('home_airport_id')->unsigned();
			$table->integer('airline_id')->unsigned();

			$table->date('crafted_at')->nullable();
			$table->date('exterior_updated_at')->nullable();
			$table->date('interior_updated_at')->nullable();

			$table->string('tail_number', 45);
			$table->smallInteger('seats')->unsigned();
			$table->string('size_cabin', 45)->nullable();
			$table->string('size_luggage_room', 45)->nullable();

			$table->boolean('sofa')->default(0);
			$table->boolean('beds')->default(0);

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
		Schema::drop('jets');
	}

}
