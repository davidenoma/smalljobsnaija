<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FormDislikes;

class DislikesController extends Controller
{
    //
    protected $fillable = [
        'forum_post_id','user_id'
    ];
    public function __construct(){
        $this -> middleware('auth')->except('login');

    }
    public function create($id){

    }
}
