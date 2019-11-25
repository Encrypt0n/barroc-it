<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\User::insert([
            'name'          => 'Bas',
            'email'         => 'Sales@barrocit.nl',
            'password'      => Hash::make('Welkom01'),
            'created_at'    => now(),
            'updated_at'    => now(),
            'role'          => 3
        ]);

        \App\User::insert([
           'name'           => 'maintenance-user',
           'email'          => 'Maintenance@barrocit.nl',
           'password'       => Hash::make('Welkom01'),
            'created_at'    => now(),
            'updated_at'    => now(),
            'role'          => 2
        ]);
    }
}
