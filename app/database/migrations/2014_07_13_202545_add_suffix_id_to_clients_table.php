<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSuffixIdToClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clients', function(Blueprint $table)
		{
			$table->tinyInteger('suffix_id', false, true)->nullable()->after('card_id');
			$table->foreign('suffix_id')
				->references('id')
				->on('suffixes')
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
		Schema::table('clients', function(Blueprint $table)
		{
			$table->dropForeign('clients_suffix_id_foreign');
			$table->dropColumn('suffix_id');
		});


	}

}
