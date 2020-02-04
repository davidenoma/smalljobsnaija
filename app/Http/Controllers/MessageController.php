<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        //
        return view('user.messaging.inbox');
    }
    public function archive(){
        return view('user.messaging.archive');
    }
    public function sent(){
        return view('user.messaging.sent');
    }
    public function draft(){
        return view('user.messaging.draft');
    }
    public function trash(){
        return view('user.messaging.trash');

    }
    public function starred(){
        return view('user.messaging.starred');

    }


}
