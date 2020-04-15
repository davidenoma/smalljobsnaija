<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class SearchController extends Controller
{
    //
    public function __construct(){
      
    }
   public function index(Request $request){
  
      $users = User::paginate(12)->onEachSide(1);           
      return view('/searchResult',compact('users'));
    }

    public function publicSearchProfile($username){           
      $welcomeName = User::where('username',$username)->first();
      return view('user.publicprofile',compact('welcomeName'));
  }

  public function search(Request $request){
    
    $location = $request->location;
    $talent  = $request ->talent;
      
    $users = User::where('talent',$talent)->orWhere('location',$location)->paginate(12);

    return view('/searchResult')->with('users',$users);
    
  }

}
