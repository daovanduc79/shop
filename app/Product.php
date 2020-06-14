<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Product extends Model
{
    function category()
    {
        return $this->belongsTo('App\Category');
    }
}
