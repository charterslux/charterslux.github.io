<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddDataToOrdersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders',
            function (Blueprint $table) {
                $table->unsignedInteger('airport_from_id')->nullable();
                $table->unsignedInteger('airport_to_id')->nullable();
                $table->dateTime('departure_at')->nullable();
                $table->tinyInteger('passengers', false, true)->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders',
            function (Blueprint $table) {
                $table->dropColumn('airport_from_id');
                $table->dropColumn('airport_to_id');
                $table->dropColumn('departure_at');
                $table->dropColumn('passengers');
            }
        );
    }

}
