<?php

use Illuminate\Database\Seeder;

class CalendarTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\CalendarType::insert([
            'name' => 'Reparatie'
        ]);
        \App\CalendarType::insert([
            'name' => 'Routinematig'
        ]);
        \App\CalendarType::insert([
            'name' => 'Installatie'
        ]);
    }
}
