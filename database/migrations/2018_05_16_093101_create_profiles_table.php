<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsinged();
            $table->string('name');
            $table->string('last_name');
            $table->integer('height');
            $table->integer('weight');
            $table->string('experience');
            
            $table->integer('trainers_id')->unsigned();
            $table->integer('diets_id')->unsigned();
            $table->integer('trainings_id')->unsigned();
            $table->timestamps();
            
        });

        Schema::table('profiles', function (Blueprint $table) {
            $table->foreign('trainers_id')->references('id')->on('profiles');
            $table->foreign('diets_id')->references('id')->on('profiles');
            $table->foreign('trainings_id')->references('id')->on('profiles');
           
            
    });

}

  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('profiles');
    }
}
