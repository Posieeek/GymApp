<?php

use Illuminate\Database\Seeder;
use App\Meal_Component;
use Faker\Factory as Faker;

class Meal_ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Diet');
        for($i = 1; $i <= 20; $i ++)
        {
        DB::table('meal_components')->insert([
            
            'meal_id' => $faker->numberBetween($min = 1, $max = 10),
            'component_id' => $faker->numberBetween($min = 1, $max = 10),
        ]);
       
        //
    }
}
}
