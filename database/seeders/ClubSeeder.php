<?php

namespace Database\Seeders;

use App\Models\Clubs;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clubs::create(
            [
                'president_id' => 2,
                'name' => 'Art Club',
                'description' => 'The Art Club is a place for practicing artists to hone in on their skills, develop their techniques and portfolios, collaborate with other artists like themselves, create bonds with the community through the arts, and learn how to work together through group projects that will beautify the school and community.',
                'category_name' => 'Arts & Culture',
                'vision' => 'Our vision is for the Vero Beach Art Club to be the voice and the representative of the visual arts and artists of our community, and to be a beacon of Artistic endeavor for the Treasure Coast. We will strive to do this by both continuing our existing programs and by strengthening our ties to our growing artistic community. We will continue our established programs as we seek to expand on them.',
                'mission' => 'Purpose of the Club: Art Club gives students the opportunity to meet monthly in a more relaxed and informal setting to discuss and work on art. Students may work on projects of their own interest or may use the time as an extension of an enrolled art class.',
                'image' => 'image/club/art_club.jpg'
            ]
        );
    }
}
