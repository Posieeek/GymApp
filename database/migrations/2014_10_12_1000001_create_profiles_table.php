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
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->string('avatar')->default('default.png')->nullable();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('experience')->nullable();
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users');
        //    
         //   $table->integer('diet_id')->unsigned()->nullable();
           // $table->integer('training_id')->unsigned()->nullable();
           
        // });

        // Schema::table('profiles', function (Blueprint $table) {
         
        //     $table->foreign('diet_id')->references('id')->on('diets');
        //     $table->foreign('training_id')->references('id')->on('trainings');
        
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
