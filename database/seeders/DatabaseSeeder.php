<?php

namespace Database\Seeders;

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
        $this->call(LocationSeeder::class);
        $this->call(CantonSeeder::class);
        $this->call(RubrosSeeder::class);
        $this->call(UserSedder::class);
    }
}
