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
            $table->integer('meal_id')->unsigned();
            $table->integer('component_id')->unsigned();
         
            
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
