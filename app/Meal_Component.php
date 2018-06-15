<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Meal_Component extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'meal_component';
    protected $fillable = [
       
        'id',
        'meal_id' ,
        'component_id',
    
    ];

    public function components()
    {
        return $this->hasMany('App\Component');
    }


    
    public function meals()
    {
        return $this->hasMany('App\Meal');
    }


    //
}
