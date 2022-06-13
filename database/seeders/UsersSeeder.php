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
                'email_verified_at' => '2022-06-13 14:43:47',
                'password' => bcrypt('12345678'),
            ]
        );
        User::create(
            [
                'name' => 'President',
                'email' => 'president@demo.com',
                'role' => '2',
                'email_verified_at' => '2022-06-13 14:43:47',
                'password' => bcrypt('12345678'),
            ]
        );
        User::create(
            [
                'name' => 'Member',
                'email' => 'member@demo.com',
                'role' => '3',
                'email_verified_at' => '2022-06-13 14:43:47',
                'password' => bcrypt('12345678'),
            ]
        );
    }
}
