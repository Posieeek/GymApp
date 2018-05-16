<?php

use Illuminate\Database\Seeder;
use App\Diets;

class DietTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diets = Diets::create([
            'id' => '1',
            'name' => 'Kurczokowa dieto',
            'meals_id' => '1',
        ]);
        $diets->save();
    
        $diets = Diets::all();
        //
    }
}
