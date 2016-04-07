<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJetClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('jet_classes');
		Schema::create('jet_classes', function(Blueprint $table)
		{
			$table->tinyInteger('id', true, true);

			$table->string('name', 64)->index();

			$table->timestamps();
			$table->softDeletes();

			$table->index('created_at');
			$table->index('updated_at');
			$table->index('deleted_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jet_classes');
	}

}
