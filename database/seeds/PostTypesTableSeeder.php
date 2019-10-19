<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_types')->insert([
            ['name' => 'Tin tức'],
            ['name' => 'Chính sách'],
            ['name' => 'Thanh toán'],
            ['name' => 'Giới thiệu'],
        ]);
    }
}
