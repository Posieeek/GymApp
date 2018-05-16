<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Exercises extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       
        'id' ,
      'name',
      'weight',
      'ex_set',
      'rep',
    ];
    public function Training_Exercises()
    {
        return $this->belongsTo('App\Training_Exercises');
    }
}


