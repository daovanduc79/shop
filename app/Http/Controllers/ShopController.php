<?php

namespace App\Http\Controllers;

use App\Http\Service\ProductService;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index(ProductService $productService) {
        $products = $productService->all();
        return view('shop.shop',compact('products'));
    }
}
