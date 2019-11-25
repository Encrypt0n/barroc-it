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
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
        //$this->call(Users::class);
        $this->call(ProductCategoriesTable::class);
        $this->call(ProductsTableSeeder::class);

=======
        $this->call(Users::class);
>>>>>>> master
    }
}
