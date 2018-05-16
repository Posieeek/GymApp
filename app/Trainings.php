<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;



class Trainings extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       
        'id',
        'name' ,

    
    ];
    public function Training_Exercises()
    {
        return $this->belongsTo('App\Training_Exercises');
    }
    //
}
