<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Training_Exercise extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'training_exercise';
    protected $fillable = [
       
        'id',
        'training_id' ,
        'exercise_id',
    
    ];


    public function Training()
    {
        return $this->hasMany('App\Training');
    }

    public function Exercise()
    {
        return $this->hasMany('App\Exercise');
    }
    //
}
