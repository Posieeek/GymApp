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
    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo(Profile::class, 'owner_id');
    }

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'training_exercise', 'training_id', 'exercise_id');
    }
    
    //
}
