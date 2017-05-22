<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['mid','link','type'];
    //test for push

    public function message()
    {
        return $this->belongsTo('App\Message');
    }
}
