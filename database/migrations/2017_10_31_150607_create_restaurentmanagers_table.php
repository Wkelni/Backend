<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurentmanagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurentmanagers', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('manager')->unsigned();
            $table->Integer('restaurent')->unsigned();
            $table->timestamps();

            $table->foreign('manager')->references('id')->on('users');
            $table->foreign('restaurent')->references('id')->on('restaurents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurentmanagers');
    }
}
