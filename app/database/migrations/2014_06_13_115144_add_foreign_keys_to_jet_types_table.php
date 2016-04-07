<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJetTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jet_types', function(Blueprint $table)
		{
			$table->foreign('class_id')
				->references('id')
				->on('jet_classes')
				->onUpdate('CASCADE')
				->onDelete('RESTRICT');
			$table->foreign('maker_id')
				->references('id')
				->on('jet_makers')
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
		Schema::table('jet_types', function(Blueprint $table)
		{
			$table->dropForeign('jet_types_class_id_foreign');
			$table->dropForeign('jet_types_maker_id_foreign');
		});
	}

}
