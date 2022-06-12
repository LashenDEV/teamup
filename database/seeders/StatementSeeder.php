<?php

namespace Database\Seeders;

use App\Models\Statement;
use Illuminate\Database\Seeder;

class StatementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statement::create(
            [
                'admin_id' => 1,
                'title' => 'welcome',
                'statement' => 'We are pleased to welcome you to the University club management system. We have an excellent reputation for creating innovative entrepreneurs. We aim to give every student in our care the best possible education to prepare them for life beyond University. Through this system, you can view any club of the University and stay connected with us.',
            ]
        );

        Statement::create(
            [
                'admin_id' => 1,
                'title' => 'about',
                'statement' => 'We are a group of undergraduate students concentrating on forming a community of students that will work as a team to study web development and be interested in digitalization. Through this web application, we hope to bring all the clubs in the University closer to the students through the online methodology.',
            ]
        );

        Statement::create(
            [
                'admin_id' => 1,
                'title' => 'mission',
                'statement' => 'Our mission is to cultivate each student\'s spiritual, moral, social, emotional, and physical well-being via a learning experience that acknowledges each kid as an individual as well as a valuable asset to society. In addition to academic activities, we hope to make all activities effective in the light of the current situation that is directing students to extracurricular activities.',
            ]
        );

        Statement::create(
            [
                'admin_id' => 1,
                'title' => 'plan',
                'statement' => 'Due to the Covid-19 pandemic, we plan to carry out the vast majority of our projects online. This system allows us to connect with all our students and exchange information. Students can contact us anytime, and students who wish to join a particular club can register online through this system. It also allows us to move away from using paper and adapt to the modern world by collecting information through technology and efficiently managing it.',
            ]
        );

        Statement::create(
            [
                'admin_id' => 1,
                'title' => 'vision',
                'statement' => 'Our vision is to manage and maintain the societies within the University efficiently. In response to our concerns about the state of the planet, we are expanding our University and constructing a Green campus, which will give our students ownership, understanding, and duty to the world at large in climate care. We foresee their development into world-class practitioners through regular in-house training and workshops, allowing them to hold their own anywhere in an ever-changing world.',
            ]
        );
    }
}
