<?php

use Illuminate\Database\Seeder;
use App\Diet_Meal;
use Faker\Factory as Faker;

class DietMealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Diet');
        for($i = 1; $i <= 10; $i ++)
        {
        DB::table('diet_meal')->insert([
            
            'diet_id' => $faker->numberBetween($min = 1, $max = 10),
            'meal_id' => $faker->numberBetween($min = 1, $max = 10),
            'updated_at' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
        ]);
       
        //
    }
}
}
