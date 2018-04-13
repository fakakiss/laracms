<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interest_people', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('people_id')->unsigned();
            $table->integer('interest_id')->unsigned();

            $table->foreign('interest_id')->references('id')->on('interests');
            $table->foreign('people_id')->references('id')->on('peoples');

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
        Schema::dropIfExists('interest_people');
    }
}
