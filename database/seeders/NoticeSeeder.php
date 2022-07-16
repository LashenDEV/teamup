<?php

namespace Database\Seeders;

use App\Models\Notice;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notice::create(
            [
                'president_id' => 2,
                'club_id' =>  1,
                'notice' => 'Drawing and Painting Competition
                             Arts Club of our university is going to organise a drawing and painting competition, to be held on Saturday, 9th March, 2022, 10:00 A.M. onwards in the university playground. The competition is open to students of all faculties. Students are requested to bring their own paints and colours, sheets will be provided on the spot. For more information, contact the undersigned.
                             Rohan
                            (Secretary, Arts Club)',
                'status' => 1,
            ]
        );
        Notice::create(
            [
                'president_id' => 2,
                'club_id' =>  1,
                'notice' => 'Inter-House Drama Competition 2022:
                             The Inter-House Drama Competition was held at the university auditorium on 18th February 2022. Performances were produced and directed by students of every faculty. Yellow House emerged champions performing the comedy ‘The Actor’s Nightmare’ and the ICT degree program followed as the Runner Up House. The Best Director Award was shared by Kehara Edirisinghe and Haresh Wedanayake of the BBST degree program. The Best Actor award was also bagged by Haresh Wedanayake of ICT. Ayesha Ariff and Suha Farouk (CST Degree) shared the award for Best Actress while Atara Isaac of ICT Degree won the award for Best Supporting Actor. Raid Rizan of BET degree won the award for Best Stage Manager.
                             Congratulations to all the participants both on stage and behind the curtains for presenting such a wonderful evening of drama. The link below can be used to view the performance.',
                'status' => 1,
            ]
        );
        Notice::create(
            [
                'president_id' => 2,
                'club_id' =>  1,
                'notice' => 'Ramazan and Wesak Assemblies:
                             This term we have held two beautiful assemblies in the Auditorium to mark important religious events, Ramazan and Wesak. These included readings, dances and skits, and were a wonderful way for us to come together and share in times of cultural significance.
                             Congratulations to all students and staff involved and thank you for creating such lovely events for us to all enjoy!',
                'status' => 1,
            ]
        );
    }
}
