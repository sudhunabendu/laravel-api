<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = "Phones";

    public function user()
    {
        $this->belongsTo('App\User');
    }
}
