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
        $cart = Session::get('cart');
        return view('shop.home',compact('cart'));
    }
}

