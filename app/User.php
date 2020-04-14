<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public $table = 'users';
    protected $fillable = ['username','email',
    'password','phone','location','talent','about','first_name','last_name'];
    protected $searchable = ['talent', 'location'];
    public $timestamps = true;
    protected $hidden = [
        'password', 'remember_token',
    ];
    function socialProviders(){
        return $this -> hasMany(SocialProvider::class);
    }
    
  public  function messages(){
        return $this -> hasMany(Message::class);
    }
  public  function forumtopics(){
        return $this -> hasMany(ForumTopic::class);
    }
   public  function comments(){
        return $this -> hasMany(ForumComment::class);
    }
  public   function forumposts(){
        return $this -> belongsToMany(ForumPost::class);
    }
public function ratings(){
    return $this -> hasMany(Ratings::class);
}
    

   
}