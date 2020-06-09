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

}
