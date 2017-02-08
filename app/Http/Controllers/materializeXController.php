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

    public function temp_post(Request $request)
    {
        // upload images

        $Background_Image = $request->file('Background_Image');
//        $name = $Background_Image->getClientOriginalName();

        return response()->json(request()->all());
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

        $name_display =  ( isset($request->Name_display) ? $request->Name_display : null );
//        $name_display = $request->Name_display;
        $subtitle = $request->subtitle;
        $my_story = $request->my_story;
        $Full_Name = $request->Full_name;
        $Age = $request->Age;
        $Phone_No = $request->Phone_No;
        $Address = $request->Address;
        $facebook = $request->facebook;
        $twitter = $request->twitter;
        $google = $request->google;
        $Linkdein = $request->google;
        $URL_to_access = $request->google;
        $email = $request->email;

        $table = materializeX::where('Logged_user_email', 'hello@hell.com' )->get();

        if($table->count())
        {

            $table[0]->User_Name_display = ( isset($name_display) ? $name_display : $table[0]->User_Name_display );

//            $table[0]->User_Name_display = $name_display;
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
            $table[0]->URL_to_access = $URL_to_access;
            $table[0]->save();

            return response()->json($table);
        }

        return response()->json(request()->all());

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
        $file= public_path(). "/materializeX/Cv_uploads/Flash.pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, 'filename.pdf', $headers);
    }

}
