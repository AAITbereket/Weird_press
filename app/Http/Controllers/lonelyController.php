<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lonely_main_table;


class lonelyController extends Controller
{
    //

    public function lonely_load_from_DB()
    {
        $lonely_main_table = lonely_main_table::first();
//        $lonely = materializeX::first();
//        $hello = "hello";
//        $materializeX = materializeX::first();
//        $materializeX12 = lonely_main_table::first();

//        return view('lonely.lonely', compact('lonely_main_table') );

            return view('lonely.lonely', compact('lonely_main_table'));
    }
}
