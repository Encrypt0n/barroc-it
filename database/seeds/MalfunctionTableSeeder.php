<?php

use Illuminate\Database\Seeder;

class MalfunctionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Malfunction::insert([
            'company_id'    => '1',
            'description'   => 'Dat ding werkt niet!'
        ]);

        /*$faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            \App\supplyCategory::insert([
                'name' => $faker->word,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }*/

    }
}
