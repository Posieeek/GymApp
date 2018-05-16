<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealComponentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_components', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('meals_id')->unsigned();
            $table->integer('components_id')->unsigned();
        
            $table->timestamps();
        });
        Schema::table('meal_components', function (Blueprint $table) {
            $table->foreign('meals_id')->references('id')->on('meals');
            $table->foreign('components_id')->references('id')->on('components');
});

    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_components');
    }
}
