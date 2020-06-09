<?php


namespace App\Http\Repository;


use App\Product;
use phpDocumentor\Reflection\Types\This;

class ProductRepository extends Repository
{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }

    public function searchByKeyWord($keyWord)
    {
        return Product::where('product_code', 'LIKE', '%'. $keyWord . '%')->orWhere('origination', 'LIKE', '%' . $keyWord . '%')->get();
    }
}
