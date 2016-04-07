<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJetTypesAnalogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jet_types_analogs', function(Blueprint $table)
		{
			$table->foreign('jet_type_analog_id')
				->references('id')
				->on('jet_types')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('jet_type_id')
				->references('id')
				->on('jet_types')
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
		Schema::table('jet_types_analogs', function(Blueprint $table)
		{
			$table->dropForeign('jet_types_analogs_jet_type_analog_id_foreign');
			$table->dropForeign('jet_types_analogs_jet_type_id_foreign');
		});
	}

}
