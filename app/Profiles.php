<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Profiles extends Model
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'profiles';
    protected $fillable = [
       
        'id' ,
        'users_id',
        'name' ,
        'last_name',
        'height' ,
        'weight',
        'experience' ,
        'trainers_id' ,
        'diets_id' ,
        'trainings_id',
   
    
    ];
    //
    public function Users()
    {
        return $this->hasOne('App\Users');
    }

    public function Trainers()
    {
        return $this->belongsTo('App\Trainers');
    }

    public function Diets()
    {
        return $this->belongsTo('App\Diets');
    }

    public function Trainings()
    {
        return $this->belongsTo('App\Trainings');
    }
}

