<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userLoginController extends Controller
{
    //
    public function doLogin(Request $request)
    {
        //print_r($request);

        //$user->save;
    }
    
    public function registerMe(Request $request)
    {
        $user = new User;
        $user->UserName = $request->UserName;
        $user->password = md5($request->password);
        print_r($request);
        $user->save;
    }
    
}
