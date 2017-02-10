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

    public function upload_images_lonely(Request $request )
    {
        $email = Auth::user()->email;

        $table = lonely_main_table::where('Logged_user_email', $email )->get();

        if($table->count())
        {
            
            $Bg_image = $request->file('Bg_image');
            $My_Story_left_image = $request->file('My_Story_left_image');
            $gallery_photos = $request->file('images');

            if( isset( $Bg_image)) {

                $Bg_image_name = $Bg_image->getClientOriginalName();
                $Bg_image->move(public_path('/lonely/img/uploads/'), $Bg_image_name);
                $table[0]->Background_image = '/lonely/img/uploads/'. $Bg_image_name;
            }

            if( isset( $My_Story_left_image)) {
                $My_Story_left_image_name = $My_Story_left_image->getClientOriginalName();
                $My_Story_left_image->move(public_path('/lonely/img/uploads/'), $My_Story_left_image_name);
                $table[0]->Story_leftSide_image = '/lonely/img/uploads/' . $My_Story_left_image_name;
            }

//            $check = count($gallery_photos);

            if( isset( $gallery_photos)) {

                foreach($gallery_photos as $gallery_photo) {

                    $gallery_photo_name = $gallery_photo->getClientOriginalName();
                    $gallery_photo->move(public_path('/lonely/img/uploads/gallery/'), $gallery_photo_name);

                    $new_row = new lonely_image_table;
                    $new_row->Logged_user_email = $email;
                    $new_row->Photo_URL = '/lonely/img/uploads/gallery/' . $gallery_photo_name;
                    $new_row->save();

                }
//                      return json_encode(lonely_image_table::all());
                    return redirect('edit_Images');
            }
            $table[0]->save();
            return json_encode($table);
            return redirect('edit_Images');
        }
        else{
            return redirect("/");
        }
    }

    public function delete_images_lonely(Request $request)
    {
        $email = Auth::user()->email;

        $photo_2_delete = $request->photo;

        $row_to_delete = lonely_image_table::where('Logged_user_email', "$email")->where('Photo_URL', "$photo_2_delete")->delete();

        return response(json_encode($row_to_delete));
    }
}
