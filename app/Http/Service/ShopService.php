<?php


namespace App\Http\Service;


use App\Cart;
use App\Http\Repository\ProductRepository;
use App\Http\Repository\ShopRepository;
use App\Product;
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

    function index() {
        return $this->productRepository->paginate(9);

    }

    function addToCart($productId) {

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

    function removeProductIntoCart($productId) {
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

}
