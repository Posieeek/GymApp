<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Diet extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

     public function meals()
     {
        return $this->belongsToMany(Meal::class, 'diet_meal', 'diet_id', 'meal_id');
    }

     public function owner()
    {
        return $this->belongsTo(Profile::class, 'owner_id');
    }

  
}
