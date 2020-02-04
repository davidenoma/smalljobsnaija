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
    public $timestamps = false;
    protected $hidden = [
        'password', 'remember_token',
    ];
    function socialProviders(){
        return $this -> hasMany(SocialProvider::class);
    }
   
}