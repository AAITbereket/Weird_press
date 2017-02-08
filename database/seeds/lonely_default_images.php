<?php

use Illuminate\Database\Seeder;

class lonely_default_images extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('lonely_image_tables')->insert([
            'id' => null,
            'Logged_user_email' => 'example@example.com',
            'Photo_URL' => '/lonely/img/gallery/1.jpg',
        ]);
        DB::table('lonely_image_tables')->insert([
            'id' => null,
            'Logged_user_email' => 'example@example.com',
            'Photo_URL' => '/lonely/img/gallery/2.jpg',
        ]);
        DB::table('lonely_image_tables')->insert([
            'id' => null,
            'Logged_user_email' => 'example@example.com',
            'Photo_URL' => '/lonely/img/gallery/3.jpg',
        ]);
        DB::table('lonely_image_tables')->insert([
            'id' => null,
            'Logged_user_email' => 'example@example.com',
            'Photo_URL' => '/lonely/img/gallery/4.jpg',
        ]);
        DB::table('lonely_image_tables')->insert([
            'id' => null,
            'Logged_user_email' => 'example@example.com',
            'Photo_URL' => '/lonely/img/gallery/5.jpg',
        ]);
        DB::table('lonely_image_tables')->insert([
            'id' => null,
            'Logged_user_email' => 'example@example.com',
            'Photo_URL' => '/lonely/img/gallery/6.jpg',
        ]);
        DB::table('lonely_image_tables')->insert([
            'id' => null,
            'Logged_user_email' => 'example@example.com',
            'Photo_URL' => '/lonely/img/gallery/7.jpg',
        ]);
        DB::table('lonely_image_tables')->insert([
            'id' => null,
            'Logged_user_email' => 'example@example.com',
            'Photo_URL' => '/lonely/img/gallery/8.jpg',
        ]);

    }
}
