<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['fromUserId','toUserId','title','body','userIp','status'];

    public function files()
    {
        return $this->hasMany('App\File');
    }
}
