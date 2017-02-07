<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterializeXesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materialize_xes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Logged_user_email');
            $table->string('Color_choice');
            $table->string('Background_image');
            $table->string('User_Name_display');
            $table->mediumText('Name_subtitle');
            $table->longText('My_story');
            $table->text('Photo_image');
            $table->string('Age');
            $table->string('Phone');
            $table->string('email'); // I can use the email submitted when registering
            $table->string('Address');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('instagram')->nullable();
            $table->string('Cv_document');
            $table->string('URL_to_access');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materialize_xes');
    }
}
