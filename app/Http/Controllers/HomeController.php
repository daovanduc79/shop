<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    function index() {
        $productsRan1 = Product::paginate(4);
        $productsRan2 = DB::table('products')->inRandomOrder()->paginate(4);
        $productsRan3 = DB::table('products')->inRandomOrder()->paginate(4);
        $cart = Session::get('cart');
        return view('shop.home',compact('cart','productsRan1','productsRan2','productsRan3'));
    }
}

