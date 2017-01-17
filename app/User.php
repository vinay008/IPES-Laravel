<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'is_admin', 'id','created_at','updated_at','_token'   
         ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function proposals()
    {
       return $this->hasMany('App\SubmitProposal');
    }

    public function uploads()
    {
       return $this->hasMany('App\Uploadpaper');
    }
}
