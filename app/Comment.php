<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body','profile_id'
        ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

 
  

}