<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('diet_id')->unsigned()->nullable();
            $table->integer('owner_id')->unsigned()->index();
            
            $table->timestamps();
           
        });
  Schema::table('meals', function (Blueprint $table) {
        $table->foreign('diet_id')->references('id')->on('diets');
        $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
           
        
    });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meals');
    }
}
