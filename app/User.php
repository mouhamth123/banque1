<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable implements MustVerifyEmail
{




    public function isAdmin(){
        return strtolower(@$this->roles) === 'admin'? true : false;
     }
     
     /**Cett méthode va determiner si le user connecté a un role moderator*/
     public function isModerator(){
        return strtolower(@$this->roles) === 'moderator'? true : false;
     }
     
    public function image()
    {
        return $this->hasMany('App\Image');
    }
    
    use Notifiable;

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
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
