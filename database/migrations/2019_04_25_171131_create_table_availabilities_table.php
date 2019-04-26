<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_availabilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('restaurant_id')->unsigned();
            // $table->foreign('restaurant_id')->references('id')->on('users');
            $table->tinyInteger('size_1')->unsigned();
            $table->tinyInteger('size_2')->unsigned();
            $table->tinyInteger('size_3')->unsigned();
            $table->tinyInteger('size_4')->unsigned();
            $table->tinyInteger('size_5')->unsigned();
            $table->tinyInteger('size_6')->unsigned();
            $table->tinyInteger('size_7')->unsigned();
            $table->tinyInteger('size_8')->unsigned();
            $table->tinyInteger('size_9')->unsigned();
            $table->tinyInteger('size_10')->unsigned();
            $table->tinyInteger('size_11')->unsigned();
            $table->tinyInteger('size_12')->unsigned();
            $table->tinyInteger('size_13')->unsigned();
            $table->tinyInteger('size_14')->unsigned();
            $table->tinyInteger('size_15')->unsigned();
            $table->tinyInteger('size_16')->unsigned();
            $table->tinyInteger('size_17')->unsigned();
            $table->tinyInteger('size_18')->unsigned();
            $table->tinyInteger('size_19')->unsigned();
            $table->tinyInteger('size_20')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_availabilities');
    }
}
