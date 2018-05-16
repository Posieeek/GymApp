<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Meal_Components extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'meal_components';
    protected $fillable = [
       
        'id',
        'meals_id' ,
        'components_id',
    
    ];

    public function components()
    {
        return $this->hasMany('App\Components',  'foreign_key');
    }

    public function meals()
    {
        return $this->hasMany('App\Meals',  'foreign_key');
    }


    //
}
