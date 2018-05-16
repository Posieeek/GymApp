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
    protected $fillable = [
       
        'id' ,
        'name' ,
        'meal_id',
    ];

    public function Meal()
    {
        return $this->hasMany('App\Meal');
    }
    //
}
