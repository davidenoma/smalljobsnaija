<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    //
    protected $fillable = ['amount','status'];

    public function job(){
        return $this -> belongsTo(Jobs::class);
    }
}
