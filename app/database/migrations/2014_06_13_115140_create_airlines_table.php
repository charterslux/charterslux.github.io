<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAirlinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('airlines');
		Schema::create('airlines', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name', 45);
			$table->string('logo', 45)->nullable();
			$table->string('AOC_number', 45)->nullable();
			$table->string('address')->nullable();
			$table->text('description')->nullable();

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
		Schema::drop('airlines');
	}

}
