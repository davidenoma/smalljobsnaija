<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    //
    public function index(){
        $user = "david.enoma@stu.cu.edu.ng";
       Mail::to($user)->send(new WelcomeMail);
      //  return view ('emails.welcomemail');
    }
}
