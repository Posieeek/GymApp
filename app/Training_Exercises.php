<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Training_Exercises extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'training_exercises';
    protected $fillable = [
       
        'id',
        'trainings_id' ,
        'exercises_id',
    
    ];


    public function Trainings()
    {
        return $this->hasMany('App\Trainings',  'foreign_key');
    }

    public function Exercises()
    {
        return $this->hasMany('App\Exercises',  'foreign_key');
    }
    //
}
