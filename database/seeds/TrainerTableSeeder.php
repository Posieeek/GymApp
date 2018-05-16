<?php

use Illuminate\Database\Seeder;
use App\Trainer;


class TrainerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers')->insert([
            'id' => '1',
            'name' => 'Piotr',
            'last_name' => 'Zwolinski',
            'experience_as_trainer' => '6 years',
            'certificate' => 'PHP',
        ]);
        
        //
    }
}

