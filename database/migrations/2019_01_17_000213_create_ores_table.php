<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('gather_cost');
            $table->decimal('kwh_cost_to_process');
            $table->decimal('base_ore_process_speed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ores');
    }
}
