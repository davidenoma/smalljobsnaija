<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TalentController extends Controller
{
    //
    public function home(Request $request)
    {
        if(auth()->guest() ){
            return view('index');
        }
        $welcomeName = Auth::user();
        
        return view('/user/home',compact('welcomeName'));
    }

}
