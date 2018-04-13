<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //

    protected $table = 'languages';

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
