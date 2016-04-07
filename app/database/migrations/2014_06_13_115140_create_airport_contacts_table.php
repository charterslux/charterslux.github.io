<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAirportContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('airport_contacts');
		Schema::create('airport_contacts', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('airport_id')->unsigned();

			$table->string('phone', 128)->nullable();
			$table->string('fax', 128)->nullable();
			$table->string('email', 128)->nullable();
			$table->string('website')->nullable();

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
		Schema::drop('airport_contacts');
	}

}
