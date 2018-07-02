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
        Schema::create('diet_meals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('diet_id')->unsigned()->index();
            $table->foreign('diet_id')->references('id')->on('diets')->onDelete('cascade');
            $table->integer('meal_id')->unsigned()->index();
            $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');
         
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
        Schema::dropIfExists('diet_meals');
    }
}
