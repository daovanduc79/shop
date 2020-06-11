<?php

namespace App\Http\Controllers;

use App\Http\Service\ProductService;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index(ProductService $productService) {
        $products = $productService->all();
        return view('shop.shop',compact('products'));
    }

    function showShopDetail($id)
    {
        $productDetails = Product::where('id',$id)->get();
        return view('shop.product_ detail',compact('productDetails'));
    }
}
