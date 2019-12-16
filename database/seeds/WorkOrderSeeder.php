<?php

use Illuminate\Database\Seeder;

class WorkOrderSeeder extends Seeder
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
        for ($i = 1; $i < 150; $i++) {
            \App\CompanyDetail::insert([
                'user_id' => $i,
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->address,
                'note' => $faker->text,
                'bkr' => 2
            ]);
        }

        for ($i = 1; $i < 150; $i++) {
            \App\CompanyDetail::insert([
                'user_id' => $i,
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'address' => $faker->address,
                'note' => $faker->text,
                'bkr' => 2
            ]);
        }
    }
}
