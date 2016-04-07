<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJetsOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('jets_options');
		Schema::create('jets_options', function(Blueprint $table)
		{
			$table->integer('jet_id')->unsigned();
			$table->integer('option_id')->unsigned();

			$table->string('value', 120)->nullable();

			$table->primary(['jet_id','option_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jets_options');
	}

}
