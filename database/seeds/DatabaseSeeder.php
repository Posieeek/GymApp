<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ComponentTableSeeder::class);
        $this->call(DietTableSeeder::class);
        $this->call(TrainingTableSeeder::class);
        $this->call(MealTableSeeder::class);
        $this->call(Meal_ComponentTableSeeder::class);
        $this->call(ExerciseTableSeeder::class);
        $this->call(Training_ExerciseTableSeeder::class);
       
      $this->call(DietMealTableSeeder::class);
      $this->call(ProfilesTableSeeder::class);
      $this->call(RolesTableSeeder::class);
      $this->call(RoleUserTableSeeder::class);
       /** 
         *
       *    
       *  
       *  
       * 
       * 
       * 
       *  
       *  $this->call(TableSeeder::class);
       *  
        */
     
    }
}


