<?php

namespace App\Http\Controllers;

use App\Http\Service\PetService;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    public function index()
//    {
//        $product = Product::all();
//        return view('shop.home',compact('product'));
//    }

    function index(PetService $petService) {
        $pets = $petService->all();
        return view('shop.home',compact('pets'));
    }
}
