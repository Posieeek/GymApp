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
    ];

     public function meal()
     {
         
     return $this->hasMany(Meal::class);
     }

    public function diet_Meal()
    {
        return $this->belongsTo('App\Diet_Meal');
    }

    // public function meals()
    // {
    //     return $this
    //         ->belongsToMany(Meal::class)
    //         ->withTimestamps();
    // }
    //
}
