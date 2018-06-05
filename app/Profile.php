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
        'name' ,
        'last_name',
        'height' ,
        'weight',
        'experience' ,
        'diet_id' ,
        'user_id',
        'training_id',
        'created_at',
        'updated_at',
    
    ];

    
    //

    public function User()
    {
        return $this->belongsTo('App\User');
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

