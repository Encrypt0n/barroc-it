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
            'supply_categories_id' => 1,
            'amount'              => 30,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);


        \DB::table('supplies')->insert([
            'name'                => 'Italian',
            'price'        => 299,
            'supply_categories_id' => 1,
            'amount'              => 25,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Italian Deluxe',
            'price'        => 375,
            'supply_categories_id' => 1,
            'amount'              => 20,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Italian Deluxe Special',
            'price'        => 390,
            'supply_categories_id' => 1,
            'amount'              => 18,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Espresso Beneficio',
            'price'        => 21.60,
            'supply_categories_id' => 2,
            'amount'              => 500,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Yellow Bourbon Brasil',
            'price'        => 23.20,
            'supply_categories_id' => 2,
            'amount'              => 450,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Espresso Roma',
            'price'        => 20.80,
            'supply_categories_id' => 2,
            'amount'              => 460,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Red Honey Honduras',
            'price'        => 27.80,
            'supply_categories_id' => 2,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Rubbber(10mm)',
            'price'        => 0.39,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Rubber(14mm)',
            'price'        => 0.45,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Slang',
            'price'        => 4.45,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Voeding',
            'price'        => 68.69,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Ontkalker',
            'price'        => 4.00,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Waterfilter',
            'price'        => 299.45,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Reservoir sensor',
            'price'        => 89.99,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Druppelstop',
            'price'        => 122.43,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Electrische pomp',
            'price'        => 478.59,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Tandwiel 110mm',
            'price'        => 5.45,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Tandwiel 70mm',
            'price'        => 5.25,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
        'name'                => 'Maalmotor',
        'price'        => 119.20,
        'supply_categories_id' => 3,
        'amount'              => 440,
        'created_at'    => now(),
        'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Zeef',
            'price'        => 28.80,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Reinigingstabletten',
            'price'        => 3.45,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Reiningsborsteltjes',
            'price'        => 8.45,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        \DB::table('supplies')->insert([
            'name'                => 'Ontkalkingspijp',
            'price'        => 21.70,
            'supply_categories_id' => 3,
            'amount'              => 440,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);











        //}

       /* $productCategories = \App\supplyCategory::all()->count();

        for ($i = 0; $i < 25; $i++) {
            \App\Supply::insert([
                'name'                =>$faker->word,
                'supply_categories_id' =>rand(1, $productCategories),
                'price'                 =>$faker->randomFloat('2', '1', '999'),
                'amount'                =>$faker->randomNumber('2'),
                'created_at'            => now(),
                'updated_at'            => now()
            ]);
        }*/

    }
}
