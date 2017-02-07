<?php

use Illuminate\Database\Seeder;

class materialize_default_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('materialize_xes')->insert([
         'id' => null,
        'Logged_user_email' => 'hello@hell.com',
        'Color_choice' => 'color1',
        'Background_image' => '/materializeX/images/home-bg.jpg',
        'User_Name_display' => 'Jhone Doe',
        'Name_subtitle' => 'UX/UI Designer from Dhaka, Bangladesh',
        'My_story' => 'Hello, I’m a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University. And scrambled it to make a type specimen book. It has survived not only five centuries',
        'Photo_image' => '/materializeX/images/person.png',
        'Age' => '25',
        'Phone'=> '+0123456789',
        'email' => 'email@domain.com', // I can use the email submitted when registering
        'facebook' => '#',
        'twitter' => '#',
        'google' => '#',
        'pinterest' => '#',
        'instagram' => '#',
        'Address' => "Dahaka, Bangladesh",
        'Cv_document' => '#',    
        'URL_to_access' => '#',
        ]);
    }
}
