<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materializeX;
use App\lonely_main_table;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_panel_DIR.admin_panel_view');
    }
    
    public function accessMyPage($email)
    {
        $table_material = materializeX::where('Logged_user_email', $email )->get();
        $table_lonely = lonely_main_table::where('Logged_user_email', $email )->get();

        if($table_material->count())
        {
            $materializeX = $table_material[0];
            return view('materializeX.materializeX', compact('materializeX'));
        }
        elseif ($table_lonely->count())
        {
            $lonely_main_table = $table_lonely[0];
            return view('lonely.lonely', compact('lonely_main_table'));
        }
        else
        {
            echo "Manhe plz go back and create user account first ".$email;
        }
    }

    public function showAdminPanel()
    {

        if (! Auth::check())
        {
            return redirect('login');
        }

        else{
            
            $email = Auth::user()->email;
            $table_material = materializeX::where('Logged_user_email', $email )->get();
            $table_lonely = lonely_main_table::where('Logged_user_email', $email )->get();

            if($table_material->count())
            {
                $materializeX = $table_material[0];
                return view('admin_panel_template_view.materialize_admin', compact('materializeX'));
            }
            elseif ($table_lonely->count())
            {
                $lonely_main_table = $table_lonely[0];
                return view('admin_panel_template_view.lonely_admin', compact('lonely_main_table'));
            }

            else
            {
                return redirect('template_choose');
            }

        }

    }
}
