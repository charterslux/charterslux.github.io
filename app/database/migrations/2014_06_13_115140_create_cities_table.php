<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('cities');
		Schema::create('cities', function(Blueprint $table)
		{
			$table->increments('id');

			$table->smallInteger('country_id')->unsigned();

			$table->string('name', 128)->index();
			$table->string('name_ru')->nullable()->index();

			$table->float('gmt_offset', 3, 1);

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
		Schema::drop('cities');
	}

}
