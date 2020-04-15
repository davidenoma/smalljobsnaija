<?php

namespace App;

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
    
}
