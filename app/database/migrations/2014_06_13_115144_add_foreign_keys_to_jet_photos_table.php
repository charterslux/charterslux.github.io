<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJetPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jet_photos', function(Blueprint $table)
		{
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
		Schema::table('jet_photos', function(Blueprint $table)
		{
			$table->dropForeign('jet_photos_jet_id_foreign');
		});
	}

}
