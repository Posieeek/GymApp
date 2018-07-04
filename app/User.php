<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     public $table = 'users';
    protected $fillable = [
       
        'id' ,
        'username',
        'email' ,   
        'password',
        'created_at',
        'updated_at',
    ];

    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this
            ->belongsToMany(Role::class)
            ->withTimestamps();
    }
    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'This action is unauthorized.');
    }
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function trainings()
    {
        return $this->hasMany(Training::class, 'owner_id');
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class, 'owner_id');
    }

    public function components()
    {
        return $this->hasMany(Component::class, 'owner_id');
    }

    public function diets()
    {
        return $this->hasMany(Diet::class, 'owner_id');
    }

    public function meals()
    {
        return $this->hasMany(Meal::class, 'owner_id');
    }
 
    public function calculators()
    {
        return $this->hasMany(Calculator::class, 'owner_id');
    }
   
}

