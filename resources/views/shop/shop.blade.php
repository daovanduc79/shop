@extends('shop.layout.shopLayout')
@section('shop-content')

    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2>Shop</h2>
                        <ul class="text-left">
                            <li><a href="{{ route('home') }}">Home </a></li>
                            <li><span> // </span>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pages-title-end -->
    <!-- shop content section start -->
    <div class="pages products-page section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="right-products">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section-title clearfix">
                                    <ul>
                                        <li>
                                            <ul class="nav-view">
                                                <li><a href="product-grid.html"> <i class="mdi mdi-view-module"></i> </a></li>
                                                <li><a href="product-list.html"> <i class="mdi mdi-view-list"></i> </a></li>
                                            </ul>
                                        </li>
                                        <li class="sort-by floatright">
                                            Showing 1-12 of 89 Results
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="grid-content">
                                @foreach($products as $key =>$product)
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <div class="pro-type">
                                                <span>{{ $product->status }}</span>
                                            </div>
                                            <a href="#"><img src="{{ asset('storage/' . $product->image) }}" width="270" height="350" alt="Product Title" /></a>
                                            <div class="actions-btn">
                                                <a href="#"><i class="mdi mdi-cart"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
                                                <a href="#"><i class="mdi mdi-heart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-dsc">
                                            <p><a href="#">{{ $product->product_code }}</a></p>
                                            <div class="ratting">
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star-half"></i>
                                                <i class="mdi mdi-star-outline"></i>
                                            </div>
                                            <span>${{ $product->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- single product end -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="pagnation-ul">
                                    <ul class="clearfix">
                                        <li><a href="#"><i class="mdi mdi-menu-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">...</a></li>
                                        <li><a href="#">10</a></li>
                                        <li><a href="#"><i class="mdi mdi-menu-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop content section end -->

@endsection
