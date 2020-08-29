<?php

namespace App\Http\Controllers\Employer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs;

class EmployerController extends Controller
{
    //
    public function __construct()
    {
      
    }
    public function index(){     
        $welcomeName =  Auth::guard('employer')->user();
        return view('employer.home', compact("welcomeName"));
    }
    public function registration(){
        return view ('employer.registration');
    }
    public function login(){
        return view('employer.login');
    }
    public function postjob(){
        return view ('employer.postjob');
    }
    public function timeline(){
        return view('employer.timeline');
    }
    public function managejobs(){
        $jobs = Jobs::orderBy('created_at','desc')->paginate(12);        
            
        return view('employer.managejobs',compact('jobs'));
    }
    public function profile(){
        return view('employer.profile');
    }


}
