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

            return view('emailNotTaken');       
//            echo "Manhe plz go back and create user account first ".$email_url;

        }
    }

    public function sendMail(Request $request)
    {

        // Replace this with your own email address
//        $siteOwnersEmail = $request->recipent;
        $siteOwnersEmail = 'bereketgebredingle@gmail.com';

        if($_POST) {

            $name = $request->contactName;
            $email = $request->contactEmail;
            $subject = $request->contactSubject;
            $contact_message = $request->contactMessage;
            $error = array();

            // Set Message
            $message = "Email from: " . $name . "<br />";
            $message .= "Email address: " . $email . "<br />";
            $message .= "Message: <br />";
            $message .= $contact_message;
            $message .= "<br /> ----- <br /> This email was sent from your site's contact form. <br />";

            // Set From: header
            $from =  $name . " <" . $email . ">";

            // Email Headers
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: ". $email . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


            if ( empty($error) ) {

                ini_set("sendmail_from", $siteOwnersEmail); // for windows server
                $mail = mail($siteOwnersEmail, $subject, $message, $headers);

                if ($mail) {
                    $error['OK'] = "done";
                    return response(json_encode($error));
                } else {
                    $error['sending'] = "Something went wrong. Please try again.";
                    return response(json_encode($error));
                }

            } # end if - no validation error

            else {

                return response(json_encode($error));

            } # end else - there was a validation error

        }

    }

}
