<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materializeX;
use App\lonely_main_table;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\lonely_image_table;

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
        return view('/welcome');
    }
    
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
                $lonely_gallery = lonely_image_table::where('Logged_user_email', $email )->get();

                if(! $lonely_gallery->count())
                {
                    $lonely_gallery = lonely_image_table::where('Logged_user_email', 'example@example.com' )->get();
                }

                $lonely_main_table = $table_lonely[0];
                return view('admin_panel_template_view.lonely_admin', compact('lonely_main_table','lonely_gallery'));

            }

            else
            {
                return redirect('template_choose');
            }

        }

    }

    public function dropPage()
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
                materializeX::where('Logged_user_email', $email )->delete();
                return redirect('admin_panel');
            }
            elseif ($table_lonely->count())
            {
                lonely_main_table::where('Logged_user_email', $email )->delete();
                return redirect('admin_panel');
            }
            
        }

        return redirect('admin_panel');

    }

    public function editTemplate()
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
                    return view('edit_materializeX.material_edit', compact('materializeX'));
                }
                elseif ($table_lonely->count())
                {
                    $lonely_main_table = $table_lonely[0];
                    return view('edit_lonely.lonely_edit', compact('lonely_main_table'));
                }

                else
                {
                    return redirect('template_choose');
                }

            }

        }

    public function sendMail()
    {
        $data = array('name'=>"Virat Gandhi");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    public function editImage()
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
                $profile_photo = $table_material[0]->Photo_image;
                $Background_image = $table_material[0]->Background_image;
                $Cv = $table_material[0]->Cv_document;
                return view('edit_materializeX.material_image_edit',compact('profile_photo', 'Background_image', 'Cv'));
            }
            elseif ($table_lonely->count())
            {

                $lonely_gallery = lonely_image_table::where('Logged_user_email', $email )->get();

                if(! $lonely_gallery->count())
                {
                    $lonely_gallery = lonely_image_table::where('Logged_user_email', 'example@example.com' )->get();
                }

                $lonely_main_table = $table_lonely[0];

                return view('edit_lonely.lonely_image_edit', compact('lonely_main_table','lonely_gallery'));

            }

            else
            {
                return redirect('template_choose');
            }

        }

    }


}






