<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('clients');
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');

			$table->tinyInteger('type_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned()->nullable();
			$table->integer('card_id')->unsigned()->nullable();

			$table->string('last_name', 120)->nullable()->index();
			$table->string('first_name', 120)->nullable()->index();
			$table->string('patronymic', 120)->nullable()->index();
			$table->boolean('sex')->nullable()->index();
			$table->date('borned_at')->nullable()->index();

			$table->smallInteger('citizenship_id')->unsigned()->nullable()->index();

			$table->string('passport', 45)->nullable();
			$table->string('phone_number', 16)->nullable();

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
		Schema::drop('clients');
	}

}
