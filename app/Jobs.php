<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    //
    protected $fillable = ['name','category','location','details'
                            ,'created_at','updated_at'];
    
    public function joboffers(){
        return $this -> hasMany(JobOffer::class);
    }
}
