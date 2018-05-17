<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Profile extends Model
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
        'user_id',
        'name' ,
        'last_name',
        'height' ,
        'weight',
        'experience' ,
        'trainer_id' ,
        'diet_id' ,
        'training_id',
   
    
    ];
    //
    public function User()
    {
        return $this->hasOne('App\User');
    }

    public function Trainer()
    {
        return $this->hasOne('App\Trainer');
    }

    public function Diet()
    {
        return $this->belongsTo('App\Diet');
    }

    public function Training()
    {
        return $this->belongsTo('App\Training');
    }
}

