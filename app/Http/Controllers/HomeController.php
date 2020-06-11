<?php

namespace App\Http\Controllers;


use App\Http\Service\PetService;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;


class HomeController extends Controller
{

    function index() {
<<<<<<< HEAD
        $cart = Session::get('cart');
        return view('shop.home',compact('cart'));
=======
//        $products = Product::select()
//        dd($products);
        return view('shop.home');
>>>>>>> 27abd8cb93fce443925336323bb6e1db02e65af7
    }
}

