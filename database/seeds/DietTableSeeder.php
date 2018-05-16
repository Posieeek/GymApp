<?php

use Illuminate\Database\Seeder;
use App\Diet;

class DietTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diets')->insert([
            'id' => '1',
            'name' => 'Kurczokowa dieto',
            'meals_id' => '1',
        ]);
       
        //
    }
}
