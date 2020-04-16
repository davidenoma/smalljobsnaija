<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    
    //
    protected $fillable = [
        'user_id','post','forum_topic_id'
    ];
    public function user(){
        return $this -> belongsTo(User::class);
    }
    public function comments(){
        return $this -> hasMany(ForumComment::class);
    }
    public function forumtopic(){
        return $this -> belongsTo(ForumTopic::class);
    }
    
}
