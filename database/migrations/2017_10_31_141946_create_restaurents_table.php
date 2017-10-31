<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurents', function (Blueprint $table) {
            $table->increments('id');
            $table->String('resto_name');
            $table->String('address');
            $table->String('website');
            $table->string('email')->unique();
            $table->Integer('phone_number')->unsigned();
            $table->String('about');
            $table->String('speciality');
            $table->String('opening_time');
            $table->String('preparation_time');
            $table->String('delevery_time');
            $table->String('delevery_cost');
            $table->Integer('owner')->unsigned();
            $table->timestamps();

            $table->unique('email', 'restaurents_email_uniq');
            $table->foreign('owner')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurents');
    }
}
