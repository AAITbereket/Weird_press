<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLonelyMainTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lonely_main_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Logged_user_email');
            $table->string('Background_image');
            $table->string('User_Name_display');
            $table->mediumText('Name_subtitle');
            $table->text('Story_title');
            $table->longText('My_story');
            $table->longText('Block_qoute');
            $table->text('Story_leftSide_image');
            $table->string('Hobby_one');
            $table->string('Hobby_two');
            $table->string('Hobby_three');
            $table->string('Hobby_four');
            $table->string('Phone');
            $table->string('URL_to_access');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lonely_main_tables');
    }
}
