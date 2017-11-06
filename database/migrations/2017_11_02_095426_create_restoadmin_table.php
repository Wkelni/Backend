<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestoadminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restoadmin', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user')->unsigned();
            $table->Integer('restaurent')->unsigned();
            $table->Integer('type');
            $table->timestamps();

            $table->foreign('user')->references('id')->on('users');
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
        Schema::dropIfExists('restoadmin');
    }
}
