<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    function index() {
        $cart = Session::get('cart');
        return view('shop.home',compact('cart'));
    }
}

