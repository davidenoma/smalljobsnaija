<?php

namespace App\Http\Controllers\forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ForumTopic;
use App\ForumPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ForumTopicController extends Controller
{
    //
    public function __construct(){
    }
    public function index(){
        return view('forum.forumtopics');
    }
    public function show(){      
        $forumtopics = ForumTopic::orderBy('created_at','desc')->paginate(12);        
        return view('forum.forumtopics',compact('forumtopics'));       
            
    }
        public function mostRecentPost($id){
        
        DB::select(' select max(updated_at) from forum_posts where forum_topic_id = ?',[$id]);
        return $mostRecent;

    }
    

    //This returns the page to create a new forum topic 
    public function create(){
        if(auth()->guest()){
            return view('/auth/login');
        }
        else{
                    
            return view('forum.createforumtopic');
    }
}
    ///This saves the request to the database. 
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
        $forumpost = ForumPost::create([
            'post' => $request -> description,
            'user_id' => Auth::user()->id,
            'forum_topic_id' => $forumtopic -> id,
        ]);
        

        $forumtopics = ForumTopic::paginate(12);    
        
        return redirect('/forumtopics');
    }
    public function category(Request $request, $category){

        $forumtopics = ForumTopic::where('category', $category)->paginate(12);

        return view('forum.forumtopics')->with('forumtopics',$forumtopics);
    }
    public function topic(Request $request,$id, $topic){

        $forumtopic = ForumTopic::where('id', $id)->first();
        $forumposts = $forumtopic ->forumposts()->orderBy('created_at','asc')->paginate(10);
        // dd($forumposts);
        return view('forum.singleforumtopic',compact('forumtopic','forumposts'));
    }
    
}
