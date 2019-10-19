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
        $this->call(\LevelsTableSeeder::class);
        $this->call(\UsersTableSeeder::class);
        $this->call(\PostTypesTableSeeder::class);
        $this->call(\ProductTypesTableSeeder::class);
        $this->call(\OrderStatusesTableSeeder::class);
        // $this->call(\ProductsTableSeeder::class);
        // $this->call(\OrdersTableSeeder::class);
    }
}
