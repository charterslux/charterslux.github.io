<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAirlineSafetyCertTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('airline_safety_cert_types');
		Schema::create('airline_safety_cert_types', function(Blueprint $table)
		{
			$table->smallInteger('id', true, true);

			$table->string('name', 45);

			$table->integer('airline_id')->unsigned();

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
		Schema::drop('airline_safety_cert_types');
	}

}
