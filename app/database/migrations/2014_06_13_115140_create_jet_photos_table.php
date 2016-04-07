<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJetPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('jet_photos');
		Schema::create('jet_photos', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('jet_id')->unsigned();

			$table->string('photo', 128);

			$table->tinyInteger('type')->nullable();

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
		Schema::drop('jet_photos');
	}

}
