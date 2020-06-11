<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function pet() {
        return $this->belongsTo('App\Pet');
    }
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
