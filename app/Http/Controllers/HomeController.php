<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.home',compact('products'));
    }

    public function shop()
    {
        $products = Product::all();
        return view('shop.shop',compact('products'));
    }
}
