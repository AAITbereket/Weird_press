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

        $name_display = $request->input('Name');
        $subtitle = $request->subtitle;
        $my_story = '';
        $Name = '';
        $Age = '';
        $Phone_No = '';
        $Address = '';

        $email = 'hello@hell.com';

        $table = materializeX::where('Logged_user_email', $email )->get();

        if(isset($table->Logged_user_email) )
        {
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
