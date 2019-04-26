<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('bookings', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('restaurant_id')->references('id')->on('restaurants');
        });

        Schema::table('table_availabilities', function (Blueprint $table){
            $table->foreign('restaurant_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign('restaurants_user_id_foreign');
        Schema::dropForeign('bookings_user_id_foreign');
        Schema::dropForeign('bookings_restaurant_id_foreign');
        Schema::dropForeign('table_availabilities_restaurant_id_foreign');
    }
}
