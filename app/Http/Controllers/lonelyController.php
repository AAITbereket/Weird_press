<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lonely_main_table;
use App\lonely_image_table;
use Illuminate\Support\Facades\Auth;
use DB;

class lonelyController extends Controller
{
    //

    public function lonely_load_from_DB()
    {
        $email = Auth::user()->email;

        $lonely_main_table = lonely_main_table::first();
        $lonely_gallery = lonely_image_table::where('Logged_user_email', $email )->get();
        
        if(! $lonely_gallery->count())
        {
            $lonely_gallery = lonely_image_table::where('Logged_user_email', 'example@example.com' )->get();
        }

            return view('lonely.lonely', compact('lonely_main_table','lonely_gallery'));
    }

    public function show_preview()
    {
        return view('previews.lonely_preview');
    }

    public function templateChosed()
    {
        
        DB::table('lonely_main_tables')->insert([
            'id' => null,
            'Logged_user_email' => Auth::user()->email,
            'Background_image' => '/lonely/img/bg1.jpg',
            'User_Name_display' => 'Alice',
            'Name_subtitle' => 'I\'m 28 years old from a village near Alpen mountain and I\'m a spinster :(',
            'Story_title' => 'You\'ll fall in love with me at the first sight',
            'My_story' => 'Lorem ipsum dolor sit amet, ei purto tamquam ceteros his, eos in graece posidonium. Ex nullam vidisse salutatus sed, ea persius phaedrum tincidunt vel. Option virtute nonumes ne est. Id homero expetendis eam, dictas rationibus ut has.',
            'Block_qoute' => 'Pri pertinacia elaboraret te, an eirmod delicatissimi nec. Eu liber quodsi maiorum mei. Civibus perfecto rationibus id his, est noster nostrud aliquando at.',
            'Story_leftSide_image' => '/lonely/img/img1.jpg',
            'Hobby_one' => 'Bachelor of Design',
            'Hobby_two' => '10x failed in love',
            'Hobby_three' => 'I love traveling',
            'Hobby_four' => 'I\'m photographer',
            'Phone'=> '+0123456789',
            'URL_to_access' => '#',
        ]);

        return redirect('admin_panel');
    }
    
    
    
}
