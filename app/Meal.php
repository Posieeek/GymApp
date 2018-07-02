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
    protected $fillable = [
       
        'id' ,
      'name',
     'diet_id',
     'created_at',
     
    ];
    public function meal_Component()
    {
        return $this->belongsTo('App\Meal_Component');
    }

     public function components()
   {
         return $this->hasMany('App\Component');
     }
     
    public function diet()
  {
       
       return $this->belongsTo(Diet::class);
 }
// public function diets()
// {
//     return $this->belongsToMany(Diet::class)
// }

    public function diet_Meal()
     {
        return $this->belongsTo('App\Diet_Meal');
     }

}

