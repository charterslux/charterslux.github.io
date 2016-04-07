<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJetsOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jets_options', function(Blueprint $table)
		{
			$table->foreign('option_id')
				->references('id')
				->on('jet_options')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('jet_id')
				->references('id')
				->on('jets')
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
		Schema::table('jets_options', function(Blueprint $table)
		{
			$table->dropForeign('jets_options_option_id_foreign');
			$table->dropForeign('jets_options_jet_id_foreign');
		});
	}

}
