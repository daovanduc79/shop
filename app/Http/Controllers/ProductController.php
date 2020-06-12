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
        $products = $this->products->paginate(5);
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
        Toastr::success('Thêm mới thành công !', 'Success', ["positionClass" => "toast-top-center"]);
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
        Toastr::success('Chỉnh sửa thành công !', 'Succcess', ["positionClass" => "toast-top-center" , "progressBar" => true]);
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $this->products->delete($id);
        Toastr::success('Xóa thành công !', 'Succcess', ["positionClass" => "toast-top-center" , "progressBar" => true]);
        return redirect()->route('product.index');
    }

}
