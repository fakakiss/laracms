<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function peoples(){
        return $this->hasMany('App\People');
    }

    public function languages(){
        return $this->hasMany('App\Language');
    }


    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function interests(){
        return $this->hasMany('App\Interest');
    }
}
