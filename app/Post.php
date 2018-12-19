<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post_tag()
    {
        return $this->hasMany('App\PostTag');
    }

    public function tag()
    {
        return $this->hasMany('App\Tag');
    }

}
