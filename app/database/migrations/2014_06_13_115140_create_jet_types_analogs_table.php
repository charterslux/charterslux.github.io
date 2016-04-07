<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJetTypesAnalogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('jet_types_analogs');
		Schema::create('jet_types_analogs', function(Blueprint $table)
		{
			$table->smallInteger('jet_type_id')->unsigned();
			$table->smallInteger('jet_type_analog_id')->unsigned();

			$table->primary(['jet_type_id','jet_type_analog_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jet_types_analogs');
	}

}
