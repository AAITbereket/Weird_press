<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materializeX;

use app\User;
use Illuminate\Support\Facades\Auth;

class materializeXController extends Controller
{

    public function temp()
    {
        //$materializeX = materializeX::first();
//        $materializeX_row = $materializeX;
        return view('temp');

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

        $name_display = $request->Name_display;
        $color_choice = $request->Color_choice;
        $subtitle = $request->subtitle;
        $my_story = $request->my_story;
        $Age = $request->Age;
        $Phone_No = $request->Phone_No;
        $Address = $request->Address;
        $facebook = $request->facebook;
        $twitter = $request->Twitter;
        $google = $request->google;
        $Linkdein = $request->Linkdein;
        $email = $request->email;

        $table = materializeX::where('Logged_user_email', $email )->get();

        if($table->count())
        {
            $table[0]->User_Name_display = $name_display;
            $table[0]->Color_choice = $color_choice;
            $table[0]->Name_subtitle = $subtitle ;
            $table[0]->My_story = $my_story ;
            $table[0]->Age = $Age ;
            $table[0]->email = $email ;
            $table[0]->Address = $Address ;
            $table[0]->Phone = $Phone_No ;
            $table[0]->facebook = $facebook ;
            $table[0]->twitter = $twitter ;
            $table[0]->google = $google ;
            $table[0]->pinterest = $Linkdein;
            $table[0]->save();
            return response()->json($table);
        }

//        return response()->json(request()->all());

    }

    public function materializeX_load_from_DB()
    {
        $materializeX = materializeX::first();
        return view('materializeX.materializeX', compact('materializeX'));
    }

    public function show_preview()
    {
        return view('previews.material_preview');
    }

    public function templateChosed()
    {

        $New_row = new materializeX;
        $New_row->Logged_user_email = Auth::user()->email;
        $New_row->Color_choice = 'color1';
        $New_row->Background_image = '/materializeX/images/home-bg.jpg';
        $New_row->User_Name_display = 'Jhone Doe';
        $New_row->Name_subtitle = 'UX/UI Designer from Dhaka, Bangladesh';
        $New_row->My_story = 'Hello, I’m a UI/UX Designer & Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University. And scrambled it to make a type specimen book. It has survived not only five centuries';
        $New_row->Photo_image = '/materializeX/images/person.png';
        $New_row->Age = '25';
        $New_row->Phone = '+0123456789';
        $New_row->email  = 'email@domain.com'; // I can use the email submitted when registering
        $New_row->facebook  = '#';
        $New_row->twitter  = '#';
        $New_row->google  = '#';
        $New_row->pinterest = '#';
        $New_row->instagram = '#';
        $New_row->Address = "Dahaka; Bangladesh";
        $New_row->Cv_document = '#';
        $New_row->URL_to_access = '#';
        $New_row->save();

        return redirect('admin_panel');

    }

    public function downloadCV()
    {
        $email = Auth::user()->email;

        $table = materializeX::where('Logged_user_email', $email )->get();
        
        $file_name = $table[0]->Cv_document;
        
        $file= public_path(). "/materializeX/Cv_uploads/". $file_name;
        
        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $file_name , $headers);
    }

    public function upload_images(Request $request )
    {
        $email = Auth::user()->email;

        $table = materializeX::where('Logged_user_email', $email )->get();

        if($table->count())
        {

            $Cv_doc = $request->file('Cv_doc');
            $Background_Image = $request->file('Background_Image');
            $profile_photo = $request->file('profile_photo');

            if( isset( $Cv_doc)) {

                $Cv_doc_name = $Cv_doc->getClientOriginalName();
                $Cv_doc->move(public_path('/materializeX/Cv_uploads'), $Cv_doc_name);
                $table[0]->Cv_document = $Cv_doc_name;
            }

            if( isset( $Background_Image)) {
                $Background_Image_name = $Background_Image->getClientOriginalName();
                $Background_Image->move(public_path('/materializeX/images/uploads'), $Background_Image_name);
                $table[0]->Background_image = '/materializeX/images/uploads/' . $Background_Image_name;
            }

            if( isset( $profile_photo)) {
                $profile_photo_name = $profile_photo->getClientOriginalName();
                $profile_photo->move(public_path('/materializeX/images/uploads'), $profile_photo_name);
                $table[0]->Photo_image = '/materializeX/images/uploads/' . $profile_photo_name;
            }

            $table[0]->save();
            return redirect('edit_Images')->with('message', 'File uploaded successfully');
        }
        else{
            return redirect("/");
        }
    }
    
    
    
}
