<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materializeX;

use app\User;

class materializeXController extends Controller
{

    public function temp()
    {
        $materializeX = materializeX::first();
//        $materializeX_row = $materializeX;
        return view('temp', compact('materializeX'));
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
