<?php

use Illuminate\Database\Seeder;
use App\Meal_Components;

class Meal_ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meal_components = Meal_Components::create([
            'id' => '1',
            'meals_id' => '1',
            'components_id' => '1',
        ]);
        $meal_components->save();

        $meal_components = Meal_Components::all();
        //
    }
}
