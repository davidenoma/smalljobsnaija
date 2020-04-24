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
  
      $users = User::paginate(12)->onEachSide(3);           
      return view('/searchResult',compact('users'));
    }

    public function publicSearchProfile($username){           
      $welcomeName = User::where('username',$username)->first();
      return view('user.publicprofile',compact('welcomeName'));
  }

  public function search(Request $request){
    
    $location = substr($request->location,0,3);
    $talent  = substr($request ->talent,0,3);
    // dd($location,$talent);
    $users = User::where('talent', 'like', '%'. $talent. '%')->where('location','like', '%'.$location.'%')->inRandomOrder()->paginate(12);
    

    return view('/searchResult')->with('users',$users);
    
  }

}
