<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@demo.com',
                'role' => '1',
                'password' => bcrypt('12345678'),
            ]
        );
        User::create(
            [
                'name' => 'President',
                'email' => 'president@demo.com',
                'role' => '2',
                'password' => bcrypt('12345678'),
            ]
        );
        User::create(
            [
                'name' => 'Member',
                'email' => 'member@demo.com',
                'role' => '3',
                'password' => bcrypt('12345678'),
            ]
        );
    }
}
