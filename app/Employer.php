<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employer extends Authenticatable
{
    //
    use Notifiable;
    public $table = 'employers';
    protected $fillable = ['username','email',
    'password','phone','location','first_name','last_name'];
    public $timestamps = true;
}
