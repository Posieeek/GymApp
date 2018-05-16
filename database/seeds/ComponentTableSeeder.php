<?php

use Illuminate\Database\Seeder;
use App\Components;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $components = Components::create([
            'id' => '1',
            'name' => 'kurczak',
            'weight' => '100',
        ]);
        $components->save();
        $components = Components::all();
        //
    }
}

