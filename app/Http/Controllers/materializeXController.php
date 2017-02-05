<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materializeX;

use app\User;

class materializeXController extends Controller
{

    public function temp(Request $request)
    {
        //$materializeX = materializeX::first();
//        $materializeX_row = $materializeX;

        $rea = $request;

        return view('temp', compact('$rea'));

    }

    public function materializeX_load_from_DB()
    {
        $materializeX = materializeX::first();
        return view('materializeX.materializeX', compact('materializeX'));
    }

//    public function X_()
//    {
//        $materializeX = materializeX::first();
//        return view('materializeX.materializeX', compact('materializeX'));
//    }
    
}
