<?php

use Illuminate\Database\Seeder;

class lonely_default extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lonely_main_tables')->insert([
            'id' => null,
            'Logged_user_email' => 'example@example.com',
            'Background_image' => '/lonely/img/bg1.jpg',
            'User_Name_display' => 'Alice',
            'Name_subtitle' => 'I\'m 28 years old from a village near Alpen mountain and I\'m a spinster :(',
            'Story_title' => 'You\'ll fall in love with me at the first sight',
            'My_story' => 'Lorem ipsum dolor sit amet, ei purto tamquam ceteros his, eos in graece posidonium. Ex nullam vidisse salutatus sed, ea persius phaedrum tincidunt vel. Option virtute nonumes ne est. Id homero expetendis eam, dictas rationibus ut has.',
            'Block_qoute' => 'Pri pertinacia elaboraret te, an eirmod delicatissimi nec. Eu liber quodsi maiorum mei. Civibus perfecto rationibus id his, est noster nostrud aliquando at.',
            'Story_leftSide_image' => '/lonely/img/img1.jpg',
            'Hobby_one' => 'Bachelor of Design',
            'Hobby_two' => '10x failed in love',
            'Hobby_three' => 'I love traveling',
            'Hobby_four' => 'I\'m photographer',
            'Phone'=> '+0123456789',
            'URL_to_access' => '#',
        ]);

    }
}
