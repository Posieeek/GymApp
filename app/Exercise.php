<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Exercise extends Model
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
      'volume',
    ];
    public function Training_Exercise()
    {
        return $this->belongsTo('App\Training_Exercise');
    }
}


