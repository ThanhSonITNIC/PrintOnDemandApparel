<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            ['id_user' => 3, 'id_status' => 1, 'total' => 1000, 'paid' => 500],
            ['id_user' => 3, 'id_status' => 1, 'total' => 7500, 'paid' => 0],
            ['id_user' => 3, 'id_status' => 7, 'total' => 200, 'paid' => 0],
            ['id_user' => 4, 'id_status' => 1, 'total' => 5500, 'paid' => 3000],
        ]);

        DB::table('order_products')->insert([
            ['id_order' => 1, 'id_product' => 1, 'price' => 100, 'quantity' => 2, 'color' => 'red', 'size' => 's', 'note' => 'ahihi'],
            ['id_order' => 1, 'id_product' => 1, 'price' => 100, 'quantity' => 5, 'color' => 'blue', 'size' => 'm', 'note' => 'ahihi'],
            ['id_order' => 1, 'id_product' => 2, 'price' => 50, 'quantity' => 1, 'color' => 'green', 'size' => 's', 'note' => 'ahihi'],
        ]);
    }
}
