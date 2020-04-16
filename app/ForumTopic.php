<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model
{
    //
    protected $fillable = ['topic','description',
    'user_id','category'];

    public function forumposts(){

    return $this->hasMany(ForumPost::class);;
        
    }
    public function user(){
        return $this -> belongsTo(User::class);
    }
    public function mostRecentPost($id){
       $mostRecent =  DB::table('forum_posts')->where('forum_topic_id',$id)->max('updated_at');
        
        return $mostRecent;

    }

    
    

    
    
}
