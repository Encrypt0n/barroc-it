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
//      40 storing calendar types
        for ($i = 1; $i < 41; $i++) {
            \App\Calendar::insert([
                'type_id' => 1,
                'company_id' => $i,
                'maintenance_id' => $i,
                'date' => $faker->date(),
                'to_repair' => $faker->text,
                'to_use' => $faker->text
            ]);
        }
        //35 routine calendar types
        for ($i = 41; $i < 76; $i++) {
            \App\Calendar::insert([
                'type_id' => 2,
                'company_id' => $i,
                'maintenance_id' => $i,
                'date' => $faker->date(),
                'to_repair' => $faker->text,
                'to_use' => $faker->text
            ]);
        }
//       75 werkbonnen
        for ($i = 1; $i < 76; $i++) {
            \App\WorkOrders::insert([
                'calendar_id' => $i,
                'supply_id' => rand(9, 24),
                'note' => $faker->text,
                'finished' => $faker->boolean
            ]);
        }
    }
}
