<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthday');
            $table->string('nationality');
            $table->string('sex');
            $table->string('academic_level');
            $table->string('study_area');
            $table->longText('short_biography');
            $table->string('email');
            $table->string('number_phone');


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
        Schema::dropIfExists('persons');
    }
}