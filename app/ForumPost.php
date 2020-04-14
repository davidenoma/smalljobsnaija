<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    //
    public function users(){
        return $this -> belongsToMany(User::class);
    }
    public function comments(){
        return $this -> hasMany(ForumComment::class);
    }
    
}
