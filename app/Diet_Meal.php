<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Diet_Meal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'diet_meal';
    protected $fillable = [
       
        'id',
        'diet_id' ,
        'meal_id',
    
    ];

    public function diets()
    {
        return $this->hasMany('App\Diet');
    }


    
    public function meals()
    {
        return $this->hasMany('App\Meal');
    }


    //
}
