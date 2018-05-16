<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Diets extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       
        'id' ,
        'name' ,
        'meals_id',
    ];

    public function Meals()
    {
        return $this->hasMany('App\Meals');
    }
    //
}
