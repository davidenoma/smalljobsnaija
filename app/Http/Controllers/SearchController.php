<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class SearchController extends Controller
{
    //
    public function __construct(){
      $users = null;
    }
   public function index(){
       return view('searchResult');
    }
    public function publicSearchProfile($username){           
      $welcomeName = User::where('username',$username)->first();
      return view('user.publicprofile',compact('welcomeName'));
  }
  public function search(Request $request){
    $location = $request->location ;
    $talent  = $request -> talent;
    $users = User::where([
        ['talent',$talent],['location',$location]
    ])->get();

    return view('/searchResult',compact('users'));
    
  }
}
