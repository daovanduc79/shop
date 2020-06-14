<?php

namespace App\Http\Controllers;


use App\Cart;
use App\Comment;
use App\Discount;
use App\Http\Service\ProductService;
use App\Http\Service\ShopService;
use App\Product;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    protected $shopService;

    public function __construct(ShopService $shopService)
    {
        $this->shopService = $shopService;

    }

    function index()
    {
//        \session()->flush();
        $cart = Session::get('cart');
        $products = $this->shopService->index();
        return view('shop.shop', compact(['products', 'cart']));
    }

    function showCart()
    {
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

    function showCheckout()
    {
        $cart = session('cart');
        return view('shop.cart.checkout', compact('cart'));
    }

    function checkout(Request $request)
    {
        $this->shopService->saveWaitOrder($request);
        \session()->forget('cart');
        return redirect()->route('shop.index');
    }

    function showShopDetail($id)
    {
        $products = $this->shopService->index();
        $productDetails = Product::where('id', $id)->get();
        $comments = Comment::where('productDetail_id',$id)->get();

        return view('shop.product_ detail', compact('productDetails','comments','products'));
    }

    public function postComment(Request $request , $id)
    {
        if (Auth::attempt()){
            $comment = new Comment();
            $comment->username = $request->name;
            $comment->content = $request->inputContent;
            $comment->productDetail_id = $id;
            $comment->user_id = Auth::id();
            $comment->save();
            return back();
        }else{
            return redirect()->route('login-shop.form');
        }
    }

    function getDiscount(Discount $discount)
    {
        $discounts = $discount->all();
        return response()->json($discounts, 200);
    }
}
