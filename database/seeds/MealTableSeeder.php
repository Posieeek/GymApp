<?php

use Illuminate\Database\Seeder;
use App\Meals;

class MealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meals = Meals::create([
            'id' => '1',
            'name' => 'kurczaczek z woda',
            'calories' => '80',
            'carbohydrates' => '0',
            'fat' => '0',
            'proteins' => '20',
         
        ]);
        $meals->save();
        $meals = Meals::all();
        //
    }
}
