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
        $faker = \Faker\Factory::Create();
//      150 active customers
        for( $i = 0; $i < 150; $i++ ) {
            \App\User::insert([
                'name'          => $faker->name,
                'email'         => $faker->unique()->safeEmail,
                'password'      => Hash::make('Welkom01'),
                'created_at'    => now(),
                'updated_at'    => now(),
                'role'          => 3
            ]);
        }
//      30 inactive customers without BKR registration
        for( $i = 0; $i < 30; $i++ ) {
            \App\User::insert([
                'name'          => $faker->name,
                'email'         => $faker->unique()->safeEmail,
                'password'      => Hash::make('Welkom01'),
                'created_at'    => now(),
                'updated_at'    => now(),
                'role'          => 3
            ]);
        }
//      10 inactive customers with BKR registration
        for( $i = 0; $i < 10; $i++ ) {
            \App\User::insert([
                'name'          => $faker->name,
                'email'         => $faker->unique()->safeEmail,
                'password'      => Hash::make('Welkom01'),
                'created_at'    => now(),
                'updated_at'    => now(),
                'role'          => 3
            ]);
        }


//      All roles accounts
        \App\User::insert([
            'name'          => 'Bas',
            'email'         => 'Sales@barrocit.nl',
            'phone'      => '0612345678',
            'password'      => Hash::make('Welkom01'),
            'created_at'    => now(),
            'updated_at'    => now(),
            'role'          => 3
        ]);

        \App\User::insert([
           'name'           => 'Pieter',
           'email'          => 'Maintenance@barrocit.nl',
            'phone'      => '0612345678',
           'password'       => Hash::make('Welkom01'),
            'created_at'    => now(),
            'updated_at'    => now(),
            'role'          => 2
        ]);
        \App\User::insert([
            'name'       => 'Xander',
            'email'      => 'Klant@barrocit.nl',
            'phone'      => '0612345678',
            'password'   => Hash::make('Welkom01'),
            'created_at' => now(),
            'updated_at' => now(),
            'role'       => 0
        ]);
        \App\User::insert([
            'name'       => 'Pieter',
            'email'      => 'Finance@barrocit.nl',
            'phone'      => '0612345678',
            'password'   => Hash::make('Welkom01'),
            'created_at' => now(),
            'updated_at' => now(),
            'role'       => 1
        ]);

        \App\User::insert([
            'name'       => 'Henk',
            'email'      => 'Supplies@barrocit.nl',
            'phone'      => '0612345678',
            'password'   => Hash::make('Welkom01'),
            'created_at' => now(),
            'updated_at' => now(),
            'role'       => 4
        ]);

        \App\User::insert([
            'name'       => 'Sales2',
            'email'      => 'Sales2@barrocit.nl',
            'phone'      => '0612345678',
            'password'   => Hash::make('Welkom01'),
            'created_at' => now(),
            'updated_at' => now(),
            'role'       => 1
        ]);
    }
}
