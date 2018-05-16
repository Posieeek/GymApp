<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;



class Training extends Model
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
    public function Training_Exercise()
    {
        return $this->belongsTo('App\Training_Exercise');
    }
    //
}
