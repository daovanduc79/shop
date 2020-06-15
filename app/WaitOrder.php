<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaitOrder extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function products() {
        return $this->belongsToMany('App\Product','wait_order_products');
    }
    public function discount() {
        return $this->belongsTo('App\Discount');
    }
}
