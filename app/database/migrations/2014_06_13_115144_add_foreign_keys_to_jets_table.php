<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jets', function(Blueprint $table)
		{
			$table->foreign('jet_type_id')
				->references('id')
				->on('jet_types')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');
			$table->foreign('home_airport_id')
				->references('id')
				->on('airports')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');
			$table->foreign('airline_id')
				->references('id')
				->on('airlines')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');


		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('jets', function(Blueprint $table)
		{
			$table->dropForeign('jets_airline_id_foreign');
			$table->dropForeign('jets_home_airport_id_foreign');
			$table->dropForeign('jets_jet_type_id_foreign');
		});
	}

}
