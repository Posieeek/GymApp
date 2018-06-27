<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDietMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diet_meal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('diet_id')->unsigned();
            $table->integer('meal_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('diet_meal', function (Blueprint $table) {
            $table->foreign('diet_id')->references('id')->on('diets');
            $table->foreign('meal_id')->references('id')->on('meals');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diet_meal');
    }
}
