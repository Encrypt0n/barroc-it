<?php

use Illuminate\Database\Seeder;

class LeaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\LeaseType::insert([
            'type' => 1,
            'created_at' => now()
        ]);

        \App\LeaseType::insert([
            'type' => 2,
            'created_at' => now()
        ]);

        for ($i = 0; $i < 5; $i++){
            \App\Lease::insert([
                'lease_type_id' => rand(1, 2),
                'customer_id'   => 3,
                'finance_id'    => 4,
                'created_at'    => now()
            ]);
        }
    }
}
