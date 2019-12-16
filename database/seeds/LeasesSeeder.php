<?php

use Illuminate\Database\Seeder;

class LeasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$faker = faker();

        $faker = \Faker\Factory::create();

        /*$leases = new \App\Lease([
            'lease_type_id' => $faker->id,
            'customer_id' => $faker->id,
            'finance_id' => $faker->id,
            'monthly_costs' => $faker->price,
            //'phone' => $faker->phoneNumber,
            //'email' => $faker->email,
        ]);*/

        $customerCount = \App\User::where('role', 0)->count();
        dd($customerCount);


        for ($i = 0; $i < $customerCount; $i++) {
            \App\Lease::insert([
                'lease_type_id' => rand(1, 4),
                'customer_id' => rand(1, 200),
                'finance_id' => $faker->randomDigit,
                'monthly_costs' => $faker->randomFloat('2', 0, 999)
            ]);

        }
    }
}
