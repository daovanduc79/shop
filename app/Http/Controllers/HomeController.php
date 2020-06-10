<?php

namespace App\Http\Controllers;

use App\Http\Service\PetService;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        $products = Product::all();
        return view('shop.home',compact('products'));
    }

    public function shop()
    {
        $products = Product::all();
        return view('shop.shop',compact('products'));
=======
//    public function index()
//    {
//        $product = Product::all();
//        return view('shop.home',compact('product'));
//    }

    function index(PetService $petService) {
        $pets = $petService->all();
        return view('shop.home',compact('pets'));
>>>>>>> 2c4e3c285f608245d5feb1267a6095225dd1d7ec
    }
}
