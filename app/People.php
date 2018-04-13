<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //

    protected $table = 'peoples';

    Protected $fillable =[

    	'name',	
    	'surname',		
    	'idno',		
    	'mobile',		
    	'email',		
    	'dob',		
    	'language',		
    	'interests',	
    	'user_id',	

    ];



    public function interests(){
        return $this->hasMany('App\Interest');
    }



    public function language(){
        return $this->belongsTo('App\Language');
    }

    



}
