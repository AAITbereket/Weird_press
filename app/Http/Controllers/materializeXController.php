<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materializeX;

use app\User;

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

        $name_display = $request->Name_display;
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

            $table[0]->User_Name_display = $name_display;
            $table[0]->Name_subtitle = $subtitle ;
            $table[0]->My_story = $my_story ;
            $table[0]->Age = $Age ;
            $table[0]->email = $email ;
            $table[0]->Address = $Address ;
            $table[0]->Phone = $Phone_No ;

            $table[0]->facebook = $facebook ;
            $table[0]->twitter = $twitter ;
            $table[0]->google = $google ;

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
    
}
