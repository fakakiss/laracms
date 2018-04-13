<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    //

    protected $table = 'interests';

     protected $fillable = [
     
        'name', 
        'user_id',
    ];


    public function people(){
        return $this->belongsToMany('App\People');
    }


    public function user(){
        return $this->belongsTo('App\User');
    }
}



 