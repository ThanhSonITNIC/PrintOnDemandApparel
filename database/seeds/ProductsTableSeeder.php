<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Áo phông 1', 'price' => 100, 'quantity' => 10, 'description' => 'Ahihi', 'id_type' => 1],
            ['name' => 'Áo phông 2', 'price' => 50, 'quantity' => 20, 'description' => 'Ahihi sâs', 'id_type' => 1],
            ['name' => 'Áo khoác nè', 'price' => 500, 'quantity' => 5, 'description' => 'Ahihi', 'id_type' => 2],
            ['name' => 'Nón lá in hình con cừu', 'price' => 250, 'quantity' => 100, 'description' => 'Ahihi', 'id_type' => 4],
            ['name' => 'Nón lá in hình con trâu', 'price' => 200, 'quantity' => 100, 'description' => 'Ahihi', 'id_type' => 4],
            ['name' => 'Mũ 1', 'price' => 250, 'quantity' => 100, 'description' => 'Ahihi', 'id_type' => 4],
        ]);
    }
}
