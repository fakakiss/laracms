<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleUser extends Model
{
    //

    protected $fillable = [
        'people_id', 
        'user_id',
    ];
}
