<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password','mobile','status','postalCode','tellNumber','img','address'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function groups()
    {

        return $this->belongsTo('App\Model\Group');
    }

}