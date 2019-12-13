<?php

use Illuminate\Database\Seeder;

class LeaseTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\LeaseType::insert([
            'type' => 1,
            'created_at'    => now(),
            'updated_at'    => now()

        ]);

        \App\LeaseType::insert([
            'type' => 3,
            'created_at'    => now(),
            'updated_at'    => now()

        ]);

        \App\LeaseType::insert([
            'type' => 6,
            'created_at'    => now(),
            'updated_at'    => now()

        ]);

        \App\LeaseType::insert([
            'type' => 12,
            'created_at'    => now(),
            'updated_at'    => now()

        ]);
    }
}
