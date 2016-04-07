<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTimeIntervalToLegsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('legs', function(Blueprint $table)
		{
			$table->tinyInteger('time_interval')->nullable()->index()->after('departure_time');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('legs', function(Blueprint $table)
		{
			$table->dropColumn('time_interval');
		});
	}

}
