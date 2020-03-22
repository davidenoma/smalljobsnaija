<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index(){
        $user  = User::create([
            
            'username' => 'davidenoma',
            'email' => 'david@you.com'
        ]);
       // $user = DB::insert('insert into user (user_id, username,email) values (?, ?,?)', [1, 'Dayle','d@b.com']);
    }
    public function profile(){
        
    }
    
}
