<?php

namespace App\Http\Controllers;

use App\Http\Service\PetService;
use App\Pet;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//
//    public function index()
//    {
//        $products = Product::all();
//        return view('shop.home', compact('products'));
//    }

    public function shop()
    {
        $products = Product::all();
        return view('shop.shop', compact('products'));
    }

    function index()
    {
        $pets = Pet::all();
        return view('shop.core.header', compact('pets'));
    }
}


