<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPreferredLanguageToClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clients', function(Blueprint $table)
		{
			$table->char('preferred_language')->default('en')->after('phone_number');
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
			$table->dropColumn('preferred_language');
		});
	}

}
