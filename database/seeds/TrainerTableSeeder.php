<?php

use Illuminate\Database\Seeder;
use App\Trainers;


class TrainerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainers = Trainers::create([
            'id' => '1',
            'name' => 'Piotr',
            'last_name' => 'Zwolinski',
            'experience_as_trainer' => '6 years',
            'certificate' => 'PHP',
        ]);
        $trainers->save();

        $trainers = Trainers::all();
        //
    }
}

