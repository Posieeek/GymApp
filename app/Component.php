<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Component extends Model
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
      'calories',
      'carbohydrates',
      'fat',
      'proteins',
    
    ];

    public function Meal_Component()
    {
        return $this->belongsTo('App\Meal_Component');
    }

      
    public function meals()
    {
        return $this->belongsTo('App\Meal');
    }
}


