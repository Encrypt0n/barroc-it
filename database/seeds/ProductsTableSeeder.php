<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $productCategories = \App\ProductCategory::all()->count();

        for ($i = 0; $i < 25; $i++) {
            \App\Product::insert([
                'name'                =>$faker->word,
                'product_categories_id' =>rand(1, $productCategories),
                'amount'              =>$faker->randomNumber('2'),
                'created_at'    => now(),
                'updated_at'    => now()
            ]);
        }
    }
}
