<?php

namespace App\Http\Controllers;

use App\Http\Service\PetService;
use App\Http\Service\ProductService;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $productService;
    protected $petsService;
    public function __construct(ProductService $productService, PetService $petService)
    {
        $this->productService = $productService;
        $this->petsService = $petService;
    }

    public function index()
    {
        $pets = $this->petsService->all();
        $products = $this->productService->all();
        return view('shop.home', compact('products','pets'));
    }

    public function shop()
    {
        $products = $this->productService->all();
        return view('shop.shop', compact('products'));
    }

    public function petIndex()
    {
        $pets = $this->petsService->all();
        return view('shop.home', compact('pets'));
    }
}
