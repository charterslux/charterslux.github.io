<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAirportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('airports');
		Schema::create('airports', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('city_id')->unsigned();

			$table->string('iata_code', 3)->nullable()->index();
			$table->string('icao_code', 4)->nullable()->index();
			$table->string('name', 120)->index();
			$table->string('name_ru', 120)->nullable()->index();

			$table->float('latitude', 10, 6)->nullable()->index();
			$table->float('longitude', 10, 6)->nullable()->index();

			$table->integer('runway_length')->unsigned()->nullable();
			$table->integer('runway_elevation')->unsigned()->nullable();

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
		Schema::drop('airports');
	}

}
