<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAirportContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('airport_contacts', function(Blueprint $table)
		{
			$table->foreign('airport_id')
				->references('id')
				->on('airports')
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
		Schema::table('airport_contacts', function(Blueprint $table)
		{
			$table->dropForeign('airport_contacts_airport_id_foreign');
		});
	}

}
