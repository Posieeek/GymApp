<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Meal extends Model
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
  
    

     public function components()
   {
    return $this->belongsToMany(Component::class, 'meal_component', 'meal_id', 'component_id');
   
     }
     
   public function diets()
   {
       
    return $this->belongsToMany(Diet::class, 'diet_meal', 'meal_id', 'diet_id');
   
  }

  public function owner()
  {
      return $this->belongsTo(Profile::class, 'owner_id');
  }

}

