<?php

use Illuminate\Database\Seeder;

class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();
        $leases = \App\Lease::all()->count();



            for ($i = 0; $i < 380; $i++) {


                \App\Invoice::insert([
                    'lease_id' => rand(1, $leases),
                    'prijs' => $faker->randomFloat(2, 0, 999),
                    'uiterlijke_betaaldatum' => '2019-01-01',
                    'betaald_op' => '2018-01-01'
                ]);

            }

            for ($i = 0; $i < 120; $i++) {


                \App\Invoice::insert([
                    'lease_id' => rand(1, $leases),
                    'prijs' => $faker->randomFloat(2, 1, 999),
                    'uiterlijke_betaaldatum' => '2018-01-01',
                    'betaald_op' => null
                ]);

            }

    }
}
