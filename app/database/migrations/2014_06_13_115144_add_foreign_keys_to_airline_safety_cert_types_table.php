<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAirlineSafetyCertTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('airline_safety_cert_types', function(Blueprint $table)
		{
			$table->foreign('airline_id')
				->references('id')
				->on('airlines')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('airline_safety_cert_types', function(Blueprint $table)
		{
			$table->dropForeign('airline_safety_cert_types_airline_id_foreign');
		});
	}

}
