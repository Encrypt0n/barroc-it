<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Users::class);
        $this->call(CompanyDetailsTableSeeder::class);
        $this->call(MalfunctionTableSeeder::class);
        $this->call(ProductCategoriesSeeder::class);
        $this->call(CalendarTypesTableSeeder::class);
<<<<<<< Updated upstream
        $this->call(ProductCategoriesSeeder::class);
=======
>>>>>>> Stashed changes
        $this->call(ProductsTableSeeder::class);

    }
}