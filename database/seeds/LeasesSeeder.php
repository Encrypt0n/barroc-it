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
        //dd($customerCount);

        //$customers = \App\User::where('role', 0)->get();
        $finances = \App\User::where('role', 1)->get();

            for ($i = 0; $i < 150; $i++) {


                \App\Lease::insert([
                    'lease_type_id' => rand(1, 4),
                    'customer_id' => rand(1, $customerCount),
                    'finance_id' => $finances->random()->id,
                    'monthly_costs' => $faker->randomFloat(2, 0, 999)
                ]);

            }

    }
}
