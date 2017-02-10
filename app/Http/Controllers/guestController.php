<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materializeX;
use App\lonely_main_table;
use App\lonely_image_table;

class guestController extends Controller
{
    //
    public function accessMyPage($email_url)
    {
        $table_material = materializeX::where('Logged_user_email', $email_url )->get();
        $table_lonely = lonely_main_table::where('Logged_user_email', $email_url )->get();

        if($table_material->count())
        {
            $materializeX = $table_material[0];
            return view('materializeX.materializeX', compact('materializeX'));
        }
        elseif ($table_lonely->count())
        {
            $lonely_gallery = lonely_image_table::where('Logged_user_email', $email_url )->get();

            if(! $lonely_gallery->count())
            {
                $lonely_gallery = lonely_image_table::where('Logged_user_email', 'example@example.com' )->get();
            }

            $lonely_main_table = $table_lonely[0];
            return view('lonely.lonely', compact('lonely_main_table','lonely_gallery'));

        }
        else
        {

            echo "Manhe plz go back and create user account first ".$email_url;

        }
    }
}
