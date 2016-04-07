<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('lang', 3)->index();
			$table->string('alias', '64')->index();
			$table->string('title', '255');
			$table->text('text');
			$table->timestamps();
			$table->timestamp('deleted_at')->nullable()->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pages');
	}

}
