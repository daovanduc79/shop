<?php


namespace App\Http\Service;


use App\Cart;
use App\Discount;
use App\Http\Repository\ProductRepository;
use App\Http\Repository\ShopRepository;
use App\Product;
use App\WaitOrder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ShopService
{
    protected $shopRepository;
    protected $productRepository;

    public function __construct(ShopRepository $shopRepository, ProductRepository $productRepository)
    {
        $this->shopRepository = $shopRepository;
        $this->productRepository = $productRepository;
    }

    function index()
    {
//        dd(\session('cart'));
        return $this->productRepository->all();
    }

    function addToCart($productId)
    {

        $product = $this->productRepository->findOrFail($productId);
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
        } else {
            $oldCart = null;
        }
        //khoi tao gio hang
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        //luu du lieu gio hang vao session
        Session::put('cart', $cart);
        Session::flash('success', 'Thêm sản phẩm khỏi giỏ hàng thành công');
    }

    function removeProductIntoCart($productId)
    {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            if (count($oldCart->items) > 0) {
                $cart = new Cart($oldCart);
                $cart->remove($productId);
                Session::put('cart', $cart);
                Session::flash('success', 'Xóa sản phẩm khỏi giỏ hàng thành công');
            } else {
                Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
            }
        } else {
            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
        }
    }

    function saveWaitOrder($request)
    {

        $discounts = new Discount();
//        dd($discounts->all());
//        dd($request->discount );
        $waitOrder = new WaitOrder();
        $waitOrder->user_id = Auth::user()->id;
        foreach ($discounts->all() as $discount) {
            if ($request->discount == $discount->price) {
                $waitOrder->discount_id = $discount->id;
            }
        }
        $waitOrder->totalQty = \session('cart')->totalQty;
        $waitOrder->totalPrice = \session('cart')->totalPrice;
        $waitOrder->vat = $request->vat;
        $waitOrder->totalOrder = $request->orderTotal;
//        dd($waitOrder);
        $waitOrder->save();
        foreach (\session('cart')->items as $key => $item) {
            $product = $this->productRepository->findOrFail($key);
            $product->status = 0;
            $product->save();
        }
//        $this->shopRepository->save($waitOrder);
    }

}
