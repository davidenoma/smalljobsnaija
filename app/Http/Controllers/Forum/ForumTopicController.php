<?php

namespace App\Http\Controllers\forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumTopicController extends Controller
{
    //
    public function index(){
        return view('forum.forumtopics');
    }
    public function create(){
        return view('forum.createforumtopic');
    }
    
}
