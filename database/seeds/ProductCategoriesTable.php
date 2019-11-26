<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            \App\ProductCategory::insert([
                'name' => $faker->word,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
