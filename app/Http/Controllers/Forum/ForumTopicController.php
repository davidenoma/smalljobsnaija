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
    public function show(){      
         $forumtopics = ForumTopic::paginate(12);        
        return view('forum.forumtopics',compact('forumtopics'));       
            
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

        if($request -> topic == null){
            return  redirect()->back();
        }
        
        $forumtopic =  ForumTopic::create([
            'topic' => $request->topic,
            'description' => $request ->description,
            'category' =>$request->category,
            'user_id' => Auth::user()->id,
         
        ]);
        $forumtopics = ForumTopic::paginate(12);    

            return view('forum.forumtopics',compact('forumtopics'));
    }
    public function category(Request $request, $category){

        $forumtopics = ForumTopic::where('category', $category)->paginate(12);

        return view('forum.forumtopics')->with('forumtopics',$forumtopics);
    }
    public function topic(Request $request, $topic){

        $forumtopic = ForumTopic::where('topic', $topic)->first();
        
        return view('forum.singleforumtopic',compact('forumtopic'));
    }
    
}
