<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable= ['perCode','name','subGid'];

    public function users(){
        return $this->hasMany('App\User' , 'gid');
    }
}
