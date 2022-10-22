<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BookablesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BookablesTableSeeder::class);
    }
}
