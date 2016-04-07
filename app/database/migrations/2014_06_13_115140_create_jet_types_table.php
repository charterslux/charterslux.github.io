<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJetTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('jet_types');
		Schema::create('jet_types', function(Blueprint $table)
		{
			$table->smallInteger('id', true, true);

			$table->tinyInteger('class_id')->unsigned();
			$table->smallInteger('maker_id')->unsigned();

			$table->string('name', 128)->nullable();
			$table->text('description_ru')->nullable();

			$table->integer('flight_range')->unsigned()->nullable()->index();
			$table->integer('max_flight_height')->unsigned()->nullable()->index();
			$table->smallInteger('max_speed')->unsigned()->nullable()->index();
			$table->smallInteger('min_pax')->unsigned()->nullable()->index();
			$table->smallInteger('max_pax')->unsigned()->nullable()->index();

			$table->decimal('length', 5)->unsigned()->nullable()->index();
			$table->decimal('width', 4)->unsigned()->nullable()->index();
			$table->decimal('height', 4)->unsigned()->nullable()->index();
			$table->decimal('luggage_bay_volume', 5)->unsigned()->nullable()->index();

			$table->smallInteger('production_from')->nullable()->index()->index();
			$table->smallInteger('production_to')->nullable()->index()->index();

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
		Schema::drop('jet_types');
	}

}
