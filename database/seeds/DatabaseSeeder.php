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
        $this->call(CalendarTypesTableSeeder::class);
        $this->call(ProductCategoriesSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(LeaseTypesSeeder::class);
        $this->call(WorkOrderSeeder::class);

    }
}
