<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
        //$productCategories = \App\ProductCategory::all()->count();

        //for ($i = 0; $i < 25; $i++) {


        \DB::table('supplies')->insert([
            'name'                => 'Italian Light',
            'price'        => 289,
            'product_categories_id' => 1,
            'amount'              => 30,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);


        \DB::table('supplies')->insert([
            'name'                => 'Italian',
            'price'        => 299,
            'product_categories_id' => 1,
            'amount'              => 25,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Italian Deluxe',
            'price'        => 375,
            'product_categories_id' => 1,
            'amount'              => 20,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Italian Deluxe Special',
            'price'        => 390,
            'product_categories_id' => 1,
            'amount'              => 18,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Espresso Beneficio',
            'price'        => 21.60,
            'product_categories_id' => 2,
            'amount'              => 500,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Yellow Bourbon Brasil',
            'price'        => 23.20,
            'product_categories_id' => 2,
            'amount'              => 450,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Espresso Roma',
            'price'        => 20.80,
            'product_categories_id' => 2,
            'amount'              => 460,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Red Honey Honduras',
            'price'        => 27.80,
            'product_categories_id' => 2,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);











        //}
    }
}
