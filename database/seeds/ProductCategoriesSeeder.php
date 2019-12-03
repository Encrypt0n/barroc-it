<?php

use Illuminate\Database\Seeder;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       // $faker = \Faker\Factory::create();

        //for ($i = 0; $i < 5; $i++) {
        \DB::table('supply_categories')->insert([
                //'id'   => 1,
                'name' => 'machines',
                'created_at' => now(),
                'updated_at' => now()
            ]);

        \DB::table('supply_categories')->insert([
            //'id'   => 2,
            'name' => 'beans',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        //}
    }
}
