<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([
            ['name' => 'Mới'],
            ['name' => 'Đã duyệt'],
            ['name' => 'Đã đặt cọc'],
            ['name' => 'Đã in'],
            ['name' => 'Đang giao hàng'],
            ['name' => 'Đã nhận hàng'],
        ]);
    }
}
