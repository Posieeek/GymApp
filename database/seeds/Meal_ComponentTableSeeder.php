<?php

use Illuminate\Database\Seeder;
use App\Meal_Component;

class Meal_ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meal_components')->insert([
            'id' => '1',
            'meals_id' => '1',
            'components_id' => '1',
        ]);
       
        //
    }
}
