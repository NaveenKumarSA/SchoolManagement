<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactsMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;

class MailController extends Controller
{
    public function sendEmail(Request $request){

        $name=$request->input('name');
        $email=$request->input('email');
        $message=$request->input('message');
       /*  Mail::to('naveen.souriraj@gmail.com', )->send($);  */
        Mail::to($email)->send(new ContactsMail());

        return new ContactsMail();


    }
}
