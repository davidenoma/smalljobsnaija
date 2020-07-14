<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    //
    protected $table = 'ratings';
    protected $fillable = ['receiver_id','giver_id','score'];
    public $timestamps = true;
    public function user(){
        return $this -> belongsTo(User::class);
    }
    
}
