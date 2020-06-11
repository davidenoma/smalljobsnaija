<?php

namespace App\Http\Controllers\Employer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployerController extends Controller
{
    //
    public function __construct()
    {
      $this -> middleware('auth')->except('logout');
    }
    public function index(){
        if(auth()->guest()){

            return view('index');
        }
        $welcomeName = Auth::user();
        return view('employer.home', compact("welcomeName"));
    }
    public function registration(){
        return view ('employer.registration');
    }
    public function login(){
        return view('employer.login');
    }


}
