<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SendEmailController extends Controller
{
    public function send(Request $request)
    {
        Session::flash('success','Success');
        $name = $request->get('name');
        $email = $request->get('email');
        $subject = $request->get('subject');
        $comment = $request->get('comment');

        $to = "info@ghimyanmar.com";

        $body = 'Hello, <br><br>

        You have received a message from Benchmark Management College International. <br /><br />

        First Name    : '.$name.'    <br /><br />

        Email : '.$email.'    <br /><br />

        Subject : '.$subject.'    <br /><br />

        Message : '.$comment.'    <br /><br />

        ';

        $headers = "From: ".$email."\n";

        // $headers .= "MIME-Version: 1.0\n";

        // $headers .= "Content-type: text/html; charset=iso-8859-1\n";

        if (mail($to, $subject, $body, $headers)) {

            return redirect('contact');

        } else{
            return redirect('contact');
        }
    }
}
