<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasswordRemindersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('password_reminders');
		Schema::create('password_reminders', function(Blueprint $table)
		{
			$table->string('email')->index();
			$table->string('token')->index();
			$table->dateTime('created_at')->default('0000-00-00 00:00:00')->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('password_reminders');
	}

}
