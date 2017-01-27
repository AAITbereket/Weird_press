<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materializeX;

use app\User;

class materializeXController extends Controller
{
    //

    public function temp()
    {
        $materializeX = materializeX::all();
        
        return view('temp', compact('materializeX'));

    }

}
