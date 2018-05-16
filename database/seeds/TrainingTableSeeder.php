<?php

use Illuminate\Database\Seeder;
use App\Training;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert([
            'id' => '1',
            'name' => 'Damiana',
           
        ]);
        
        //
    }
}
