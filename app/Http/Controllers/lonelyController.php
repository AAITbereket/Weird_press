<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lonely_main_table;
use App\lonely_image_table;
use Illuminate\Support\Facades\Auth;
use DB;

class lonelyController extends Controller
{
    //

    public function lonely_load_from_DB()
    {
        $email = Auth::user()->email;

        $lonely_main_table = lonely_main_table::first();
        $lonely_gallery = lonely_image_table::where('Logged_user_email', $email )->get();
        
        if(! $lonely_gallery->count())
        {
            $lonely_gallery = lonely_image_table::where('Logged_user_email', 'example@example.com' )->get();
        }

            return view('lonely.lonely', compact('lonely_main_table','lonely_gallery'));
    }

    public function show_preview()
    {
        return view('previews.lonely_preview');
    }

    public function templateChosed()
    {
        
        DB::table('lonely_main_tables')->insert([
            'id' => null,
            'Logged_user_email' => Auth::user()->email,
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

        return redirect('admin_panel');
    }

    public function Ajax_edit_texts_And_links(Request $request)
    {
        // upload images
//        $Background_Image = $request->file('Background_Image');
//        $name = $Background_Image->getClientOriginalName();
//        return response()->json(request()->all());
//        $profile_photo = $request->file('profile_photo');
//        $Cv_doc = $request->file('Cv_doc');
//
//        $destination_images = 'materializeX/images/uploads';
//        $destination_Cv = 'materializeX/Cv_uploads';
//
//        $Background_Image->move($destination_images,$Background_Image->getClientOriginalName());
//
//        $profile_photo->move($destination_images,$profile_photo->getClientOriginalName());
//
//        $Cv_doc->move($destination_Cv,$Cv_doc->getClientOriginalName());

        $name = $request->Name;
        $name_subtitle = $request->name_subtitle;
        $story_stitle = $request->story_stitle;
        $Main_story = $request->Main_story;
        $Phone_No = $request->Phone_No;
        $block_qoute = $request->block_qoute;
        $Hobby_one = $request->Hobby_one;
        $Hobby_two = $request->Hobby_two;
        $Hobby_three = $request->Hobby_three;
        $Hobby_four = $request->Hobby_four;

        $email = Auth::user()->email;

        $table = lonely_main_table::where('Logged_user_email', $email )->get();

        if($table->count())
        {
            $table[0]->User_Name_display = $name;
            $table[0]->Name_subtitle = $name_subtitle ;
            $table[0]->Story_title = $story_stitle ;
            $table[0]->My_story = $Main_story ;
            $table[0]->Block_qoute = $block_qoute ;
            $table[0]->Hobby_one = $Hobby_one ;
            $table[0]->Hobby_two = $Hobby_two ;
            $table[0]->Phone = $Phone_No ;
            $table[0]->Hobby_three = $Hobby_three ;
            $table[0]->Hobby_four = $Hobby_four ;
            $table[0]->save();
            return response()->json($table);
        }

    }

}
