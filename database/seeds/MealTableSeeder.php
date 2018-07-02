<?php

use Illuminate\Database\Seeder;
use App\Meal;
use Faker\Factory as Faker;

class MealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Component');
        for($i = 1; $i <= 10; $i ++)
        {
        DB::table('meals')->insert([
            'name' => $faker->word(),
        ]);
        
        //
    }
}
}
