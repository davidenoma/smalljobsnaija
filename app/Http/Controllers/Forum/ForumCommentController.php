<?php

namespace App\Http\Controllers\Forum;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ForumPost;
use App\ForumTopic;


class ForumCommentController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth')->except('login');
    }
    //Check likes and Dislikes that is unique for every user for every post
    public function create(Request $request, $id){
       
        ForumPost::create([
            'forum_topic_id' => $id,
            'post' => $request ->reply,
            'user_id' => Auth::user()->id,             
        ]);
       
        // dd($forumposts);
        
        // $title = $request->forum_topic;
        // dd($request);
        // $url ='/forumtopics/title/'.$id.'/'.$title;
    
        
        return redirect()->back();

    }
}
