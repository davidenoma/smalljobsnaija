<?php

namespace App\Http\Controllers\forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ForumTopic;
use Illuminate\Support\Facades\Auth;

class ForumTopicController extends Controller
{
    //
    public function __construct(){
    }
    public function index(){
        return view('forum.forumtopics');
    }
    public function create(){
        if(auth()->guest()){
            return view('/auth/login');
        }
        else{
            return view('forum.createforumtopic');
        }
            
    }
    public function save(Request $request){

        // dd($request);
        $forumtopic =  ForumTopic::create([
            'topic' => $request->topic,
            'description' => $request ->description,
            'category' =>$request->category,
            'user_id' => Auth::user()->id,
         
        ]);

            return view('forum.forumtopics');
    }
    
}
