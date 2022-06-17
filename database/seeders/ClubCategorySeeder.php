<?php

namespace Database\Seeders;

use App\Models\ClubCategory;
use Illuminate\Database\Seeder;

class ClubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClubCategory::create(
            [
                'admin_id' => 1,
                'category_name' => 'Academic',
            ]
        );
        ClubCategory::create(
            [
                'admin_id' => 1,
                'category_name' => 'Cultural',
            ]
        );
        ClubCategory::create(
            [
                'admin_id' => 1,
                'category_name' => 'Honors',
            ]
        );
        ClubCategory::create(
            [
                'admin_id' => 1,
                'category_name' => 'Music/Performing Arts',
            ]
        );
        ClubCategory::create(
            [
                'admin_id' => 1,
                'category_name' => 'Service/Social Justice',
            ]
        );
        ClubCategory::create(
            [
                'admin_id' => 1,
                'category_name' => 'General Interest and Spiritual',
            ]
        );
        ClubCategory::create(
            [
                'admin_id' => 1,
                'category_name' => 'Arts & Culture',
            ]
        );
    }
}
