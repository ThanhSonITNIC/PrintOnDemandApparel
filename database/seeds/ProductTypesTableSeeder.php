<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            ['name' => 'Áo phông'],
            ['name' => 'Áo khoác'],
            ['name' => 'Áo thun'],
            ['name' => 'Mũ'],
            ['name' => 'Balo'],
        ]);
    }
}
