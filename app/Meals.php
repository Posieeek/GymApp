<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Meals extends Model
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
      'calories',
      'carbohydrates',
      'fat',
      'proteins',
    ];
    public function Meal_Components()
    {
        return $this->belongsTo('App\Meal_Components');
    }
}

