<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clients', function(Blueprint $table)
		{
			$table->foreign('type_id')
				->references('id')
				->on('client_types')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('card_id')
				->references('id')
				->on('client_cards')
				->onUpdate('CASCADE')
				->onDelete('CASCADE');
			$table->foreign('citizenship_id')
				->references('id')
				->on('countries')
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
			$table->dropForeign('clients_type_id_foreign');
			$table->dropForeign('clients_user_id_foreign');
			$table->dropForeign('clients_card_id_foreign');
			$table->dropForeign('clients_citizenship_id_foreign');
		});
	}

}
