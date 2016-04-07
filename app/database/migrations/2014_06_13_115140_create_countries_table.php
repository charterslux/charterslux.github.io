<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('countries');
		Schema::create('countries', function(Blueprint $table)
		{
			$table->smallInteger('id', true, true);

			$table->string('iso_code', 2)->index();
			$table->string('name', 128)->index();
			$table->string('name_ru')->nullable()->index();

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
		Schema::drop('countries');
	}

}
