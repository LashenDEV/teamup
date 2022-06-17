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
        $this->call(UsersSeeder::class);
        $this->call(StatementSeeder::class);
        $this->call(ClubSeeder::class);
        $this->call(ClubCategorySeeder::class);
    }
}
