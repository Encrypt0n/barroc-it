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
        \App\Malfunction::insert([
            'company_id'    => '1',
            'description'   => 'Dat ding werkt niet!'
        ]);
    }
}
