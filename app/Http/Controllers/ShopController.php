<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Service\ProductService;
use App\Http\Service\ShopService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    protected $shopService;

    public function __construct(ShopService $shopService)
    {
        $this->shopService = $shopService;

    }

    function index() {
        $cart = Session::get('cart');
        $products = $this->shopService->index();
        return view('shop.shop',compact(['products','cart']));
    }

    function showCart() {
        $cart = Session::get('cart');
        return view('shop.cart.index', compact('cart'));
    }

    public function addToCart($productId)
    {
        $this->shopService->addToCart($productId);
        return redirect()->back();
    }

    public function removeProductIntoCart($productId)
    {
        $this->shopService->removeProductIntoCart($productId);
        return redirect()->back();
    }

    function showCheckout() {
        $cart = session('cart');
        return view('shop.cart.checkout',compact('cart'));
    }

    function checkout() {

    }
}
