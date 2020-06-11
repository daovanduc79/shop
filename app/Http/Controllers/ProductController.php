<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductRequest;
use App\Http\Service\ProductService;
use App\Product;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    protected $products;

    public function __construct(ProductService $productService)
    {
        $this->products = $productService;
    }

    public function index()
    {
        $products = $this->products->all();

        return view('admin.products.list',compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.add',compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        $product = $this->products->create($request);
        $this->products->save($product);
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit',compact('product'));
    }

    public function update($id , Request $request)
    {
        $this->products->update($id,$request);
        $message = 'chinh sua thanh cong';
        session()->flash('success',$message);

        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $this->products->delete($id);
        session()->flash('success', 'Xóa thành công');
        return redirect()->route('product.index');
    }

}
