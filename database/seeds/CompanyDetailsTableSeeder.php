<?php

use Illuminate\Database\Seeder;

class CompanyDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\CompanyDetail::insert([
            'user_id'       => '3',
            'name'          => 'Test Company',
            'email'         => 'testcompany@gmail.com',
            'address'       => 'teststraat 48'
        ]);
    }
}
