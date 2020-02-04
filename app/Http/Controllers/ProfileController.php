<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $sourcePath= $request->path();
        $welcomeName = Auth::user();
        
       return view('/user/profile',compact('welcomeName'));
}
    public function publicProfile(){
        $welcomeName = Auth::user();
        return view('/user/publicprofile',compact('welcomeName'));
    }
    public function updateProfile(){
        
    }
}

