<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Administrator', 'password' => crypt('123456', 'wtf?'), 'email' => 'admin@test.dev', 'tel' => '4657687989', 'address' => 'DN', 'id_level' => 1],
            ['name' => 'Administrator 2', 'password' => crypt('123456', 'wtf?'), 'email' => 'admin2@test.dev', 'tel' => '4655469', 'address' => 'HCM', 'id_level' => 1],

            ['name' => 'Customer', 'password' => crypt('123456', 'wtf?'), 'email' => 'customer@test.dev', 'tel' => '3688999983', 'address' => 'QN', 'id_level' => 2],
            ['name' => 'Customer 2', 'password' => crypt('123456', 'wtf?'), 'email' => 'customer2@test.dev', 'tel' => '3999442983', 'address' => 'HN', 'id_level' => 2],
        ]);
    }
}
