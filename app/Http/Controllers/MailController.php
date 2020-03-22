<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    //
    public function index(){
        $welcomeName = Auth::user();
        $user = "david.enoma@stu.cu.edu.ng";
       Mail::to($user)->send(new WelcomeMail);
      //  return view ('emails.welcomemail');
    }
}
