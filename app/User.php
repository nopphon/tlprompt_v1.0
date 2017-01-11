<?php

namespace Codecourse;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    # A user can have many articles
    # @return \Illuminate\Database\Eloquent\Relation\HasMany

    public function articles(){

        return $this->hasMany('Codecourse\Article');

    }

    public function isATeamManager(){

        return true;

    }
}
