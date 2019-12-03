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
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
        \App\Malfunction::insert([
            'company_id'    => '1',
            'description'   => 'Dat ding werkt niet!'
        ]);

<<<<<<< Updated upstream
        /*$faker = \Faker\Factory::create();
=======
        $faker = \Faker\Factory::create();
>>>>>>> Stashed changes

        for ($i = 0; $i < 5; $i++) {
            \App\supplyCategory::insert([
                'name' => $faker->word,
                'created_at' => now(),
                'updated_at' => now()
            ]);
<<<<<<< Updated upstream
        }*/

=======
        }
>>>>>>> Stashed changes
    }
}
