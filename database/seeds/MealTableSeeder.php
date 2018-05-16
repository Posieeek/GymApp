<?php

use Illuminate\Database\Seeder;
use App\Meal;

class MealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meals')->insert([
            'id' => '1',
            'name' => 'kurczaczek z woda',
            'calories' => '80',
            'carbohydrates' => '0',
            'fat' => '0',
            'proteins' => '20',
         
        ]);
        
        //
    }
}
