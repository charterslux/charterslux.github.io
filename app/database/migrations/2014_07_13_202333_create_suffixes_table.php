<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuffixesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suffixes', function(Blueprint $table)
		{
			$table->tinyInteger('id', true, true);
			$table->string('alias', 64)->index();
			$table->timestamps();
			$table->softDeletes();

			$table->unique('alias');
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
		Schema::drop('suffixes');
	}

}
