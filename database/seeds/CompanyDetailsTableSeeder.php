<?php

use Illuminate\Database\Seeder;

class CompanyDetailsTableSeeder extends Seeder
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
        for( $i = 1; $i < 150; $i++ ) {
            \App\CompanyDetail::insert([
                'user_id'       => $i,
                'name'          => $faker->name,
                'email'         => $faker->unique()->safeEmail,
                'address'       => $faker->address,
                'note'          => $faker->text,
                'bkr'           => 2
            ]);
        }
//      30 inactive customers without BKR registration
        for( $i = 151; $i < 180; $i++ ) {
            \App\CompanyDetail::insert([
                'user_id'       => $i,
                'name'          => $faker->name,
                'email'         => $faker->unique()->safeEmail,
                'address'       => $faker->address,
                'note'          => $faker->text,
                'bkr'           => 0
            ]);
        }
//      10 inactive customers with BKR registration
        for( $i = 181; $i < 190; $i++ ) {
            \App\CompanyDetail::insert([
                'user_id'       => $i,
                'name'          => $faker->name,
                'email'         => $faker->unique()->safeEmail,
                'address'       => $faker->address,
                'note'          => $faker->text,
                'bkr'           => 2
            ]);
        }


//      Testing company detail
        \App\CompanyDetail::insert([
            'user_id'       => '193',
            'name'          => 'Test Company',
            'email'         => 'testcompany@gmail.com',
            'address'       => 'teststraat 48',
            'note'          => 'Testing opmerking...'
        ]);
    }
}
