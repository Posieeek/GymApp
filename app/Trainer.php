<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Trainer extends Model
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       
        'id' ,
        'name' ,
        'last_name',
        'experience_as_trainer' ,
        'certificate' ,
   
    
    ];
    //
}

