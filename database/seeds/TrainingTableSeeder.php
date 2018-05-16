<?php

use Illuminate\Database\Seeder;
use App\Trainings;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainings = Trainings::create([
            'id' => '1',
            'name' => 'Damiana',
           
        ]);
        $trainings->save();

        $trainings = Trainings::all();
        //
    }
}
