<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin\Admin;
use Illuminate\Support\Facades\Mail;
use App\Mail\UpdateYourProfile;
class AdminController extends Controller
{
    
        public function __construct(){
           
        }
        public function totalUsers(){

            return User::all()->count();
        }
        public function latestUsers(){


            $latestUsers = User::all()->orderBy('created_at','desc')->take(10)->get();
            return $latestUsers;
        }

        public function sendNoficicationMail(Mail $mail){

        }
        public function index(){
            $latestUsers = User::orderBy('created_at','desc')->take(10)->get();
            $allUsers =  User::all()->count();
            
            return view('admin.home',compact('latestUsers','allUsers'));

        }
        public function login(){

        }
        public function updateCategory(Request $request){
            
            $user = User::find($request->id);
            $user -> category = $request->category;
            $user -> update();
            return redirect()->back();


        }
        public function viewCategory(){
            $users = User::where('category','')->get();
            return view('admin.getusers',compact('users'));
        }
    }

