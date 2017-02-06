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

        return response()->json($request->all());
//        $data['sucess'] = true;
//        $data['message'] = 'Your AJAX processed correctly';

//        $this->layout = null;
//        //check if its our form
//        if(Request::ajax()){
//            $name = Input::get( 'first_name' );
//            $content = Input::get( 'name_subtitle' );
//
//            $response = array(
//                'status' => 'success',
//                'msg' => 'Setting created successfully',
//            );
//            return 'yea';
//        }else{
//            return 'no';
//        }

//        return $request->input();

//        return response()->json($data);
//        return redirect('/')->with('success_message', 'Record successfully added!');

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
