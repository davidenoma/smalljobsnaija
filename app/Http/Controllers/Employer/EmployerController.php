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
      
    }
    public function index(){
        
        // if( auth('employer')){
        //     return view('index');
        // }
       
        $welcomeName =  Auth::guard('employer')->user();
        return view('employer.home', compact("welcomeName"));
    }
    public function registration(){
        return view ('employer.registration');
    }
    public function login(){
        return view('employer.login');
    }


}
