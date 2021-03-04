<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    public function post()
    {
        $this->belongsTo('App\Post');
    }
}
