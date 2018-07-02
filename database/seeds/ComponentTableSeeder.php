<?php

use Illuminate\Database\Seeder;
use App\Component;
use Faker\Factory as Faker;

class ComponentTableSeeder extends Seeder
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
        DB::table('components')->insert([
            'name' => $faker->word(),
            'weight' => $faker->numberBetween($min = 10, $max = 900),
            'calories' => $faker->randomElement(range(100,1000)),
            'carbohydrates' => $faker->randomElement(range(5,500)),
            'fat' => $faker->randomElement(range(5,500)),
            'proteins' => $faker->randomElement(range(5,500)),
        ]);

        
        }
        //
    }
}

