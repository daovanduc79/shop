<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new Product();
        $products->product_code = 'PD026';
        $products->origination = 'England' ;
        $products->fur_color = 'bee' ;
        $products->characteristics = 'Long Dai' ;
        $products->weight = '8-12 kg' ;
        $products->longevity = '6-8 year' ;
        $products->save();

        $products = new Product();
        $products->product_code = 'HK642';
        $products->origination = 'France' ;
        $products->fur_color = 'Xam' ;
        $products->characteristics = 'Long Dai' ;
        $products->weight = '14-22 kg' ;
        $products->longevity = '10-15 year' ;
        $products->save();

        $products = new Product();
        $products->product_code = 'P521';
        $products->origination = 'China' ;
        $products->fur_color = 'White' ;
        $products->characteristics = 'Long Dai' ;
        $products->weight = '8-12 kg' ;
        $products->longevity = '6-10 year' ;
        $products->save();
    }
}
