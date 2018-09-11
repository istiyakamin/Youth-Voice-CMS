<?php

namespace App;

use Cache;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','gender', 'birthdate', 'occupation', 'position', 'profile_picture', 'facebook', 'twitter', 'likedin', 'address', 'status', 'verify_token', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function payment()
    {
        return $this->hasMany('App\Payment');
    }

    // User online activity checking
    public function isOnline(){
        return Cache::has('user-is-online-'. $this->id);
    }
}
