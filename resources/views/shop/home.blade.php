@extends('shop.layout.shopLayout')
@section('shop-content')

    <!-- header section end -->
    <!-- slider-section-start -->
    <div class="main-slider-one main-slider-two slider-area">
        <div id="wrapper">
            <div class="slider-wrapper">
                <div id="mainSlider" class="nivoSlider">
                    <img src="{{ asset('img/1920x800/animals1.jpg') }}" alt="main slider" title="#htmlcaption"/>
                    <img src="{{ asset('img/1920x800/animals2.jpg') }}" alt="main slider" title="#htmlcaption2"/>
                </div>
                <div id="htmlcaption" class="nivo-html-caption slider-caption">
                    <div class="container">
                        <div class="slider-left slider-right">
                            <div class="slide-text animated zoomInUp">
                                <h3>new collection</h3>
                                <h1>Men’s Fashion 2016</h1>
                            </div>
                            <div class="animated slider-btn fadeInUpBig">
                                <a class="shop-btn" href="shop.html">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="htmlcaption2" class="nivo-html-caption slider-caption">
                    <div class="container">
                        <div class="slider-left two-caption-text slider-right">
                            <div class="slide-text animated zoomInUp">
                                <h3>new collection</h3>
                                <h1>Men’s Fashion 2016</h1>
                                <span>Starting at $65.00. Don’t miss out!</span>
                            </div>
                            <div class="one-p animated bounceInLeft">
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                    interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</p>
                            </div>
                            <div class="animated slider-btn fadeInUpBig">
                                <a class="shop-btn" href="shop.html">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider section end -->

    <!-- collection section start -->
    @include('shop.layout.information-layout')
    <!-- collection section end -->

    <!-- tab-products section start -->
    <div class="tab-products single-products products-two section-padding extra-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <div class="product-tab nav nav-tabs">
                            <ul>
                                <li class="active"><a data-toggle="tab" href="#arrival">New Arrival <span>//</span></a>
                                </li>
                                <li><a data-toggle="tab" href="#popular">Popular Product <span>//</span></a></li>
                                <li><a data-toggle="tab" href="#best">Best Seller</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center tab-content">
                <div class="tab-pane  fade in active" id="arrival">
                    <div class="wrapper">
                        <ul class="load-list load-list-two">
                            <li>
                                <div class="row text-center">
                                    @foreach($productsRan1 as $product)
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>{{ $product->sale }}</span>
                                                </div>
                                                <a href="#"><img src="{{ asset('storage/' . $product->image) }}"
                                                                 alt="Product Title"
                                                                 height="350" width="270"/></a>
                                                <div class="actions-btn">
                                                    <a href="{{ route('shop.index') }}"><i class="mdi mdi-cart"></i></a>
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{ $product->product_code }}</a></p>
                                                <span>${{ $product->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end -->
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    @foreach($productsRan2 as $product)
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('storage/' . $product->image) }}"
                                                                 alt="Product Title" height="350" width="270"/></a>
                                                <div class="actions-btn">
                                                    <a href="{{ route('shop.index') }}"><i class="mdi mdi-cart"></i></a>
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{ $product->product_code }}</a></p>
                                                <span>${{ $product->price }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single product end -->
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <div class="row text-center">
                                    @foreach($productsRan3 as $product)
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="pro-type">
                                                    <span>new</span>
                                                </div>
                                                <a href="#"><img src="{{ asset('storage/' . $product->image) }}"
                                                                 alt="Product Title"
                                                                 height="350" width="270"/></a>
                                                <div class="actions-btn">
                                                    <a href="{{ route('shop.index') }}"><i class="mdi mdi-cart"></i></a>
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
                                                    <a href="#"><i class="mdi mdi-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-dsc">
                                                <p><a href="#">{{ $product->product_code }}</a></p>
                                                <span>${{ $product->price }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- single product end -->
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                        <button id="load-more-two">Load More</button>
                    </div>
                </div>
                <!-- arrival product end -->
{{--                <div class="tab-pane fade" id="popular">--}}
{{--                    <div class="wrapper">--}}
{{--                        <ul class="load-list load-list-three">--}}
{{--                            <li>--}}
{{--                                <div class="row text-center">--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/16.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$57.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/17.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s White t-shirt</a></p>--}}
{{--                                                <span>$67.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/18.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Blue t-shirt</a></p>--}}
{{--                                                <span>$77.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/19.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Grey t-shirt</a></p>--}}
{{--                                                <span>$77.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="row text-center">--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/20.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s white t-shirt</a></p>--}}
{{--                                                <span>$65.20</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="pro-type sell">--}}
{{--                                                    <span>sell</span>--}}
{{--                                                </div>--}}
{{--                                                <a href="#"><img src="img/products/21.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$57.00 <del>$62.00</del></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/22.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$56.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/23.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$96.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="row text-center">--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="pro-type">--}}
{{--                                                    <span>new</span>--}}
{{--                                                </div>--}}
{{--                                                <a href="#"><img src="img/products/18.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s White t-shirt</a></p>--}}
{{--                                                <span>$165.20</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/21.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s White t-shirt</a></p>--}}
{{--                                                <span>$57.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/23.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$67.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/19.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Grey t-shirt</a></p>--}}
{{--                                                <span>$77.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <button id="load-more-three">Load More</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- popular product end -->--}}
{{--                <div class="tab-pane fade" id="best">--}}
{{--                    <div class="wrapper">--}}
{{--                        <ul class="load-list load-list-four">--}}
{{--                            <li>--}}
{{--                                <div class="row text-center">--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="pro-type">--}}
{{--                                                    <span>new</span>--}}
{{--                                                </div>--}}
{{--                                                <a href="#"><img src="img/products/21.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s White t-shirt</a></p>--}}
{{--                                                <span>$165.20</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/13.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$57.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="pro-type">--}}
{{--                                                    <span>-15%</span>--}}
{{--                                                </div>--}}
{{--                                                <a href="#"><img src="img/products/22.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$67.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/16.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$77.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="row text-center">--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/17.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$65.20</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="pro-type sell">--}}
{{--                                                    <span>sell</span>--}}
{{--                                                </div>--}}
{{--                                                <a href="#"><img src="img/products/19.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Grey t-shirt</a></p>--}}
{{--                                                <span>$57.00 <del>$62.00</del></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/18.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s White t-shirt</a></p>--}}
{{--                                                <span>$56.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/20.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$96.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="row text-center">--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="pro-type">--}}
{{--                                                    <span>new</span>--}}
{{--                                                </div>--}}
{{--                                                <a href="#"><img src="img/products/23.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$165.20</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <div class="pro-type">--}}
{{--                                                    <span>new</span>--}}
{{--                                                </div>--}}
{{--                                                <a href="#"><img src="img/products/20.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s White t-shirt</a></p>--}}
{{--                                                <span>$165.20</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/16.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Black t-shirt</a></p>--}}
{{--                                                <span>$57.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                    <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">--}}
{{--                                        <div class="single-product">--}}
{{--                                            <div class="product-img">--}}
{{--                                                <a href="#"><img src="img/products/18.jpg" alt="Product Title"/></a>--}}
{{--                                                <div class="actions-btn">--}}
{{--                                                    <a href="#"><i class="mdi mdi-cart"></i></a>--}}
{{--                                                    <a href="#" data-toggle="modal" data-target="#quick-view"><i--}}
{{--                                                            class="mdi mdi-eye"></i></a>--}}
{{--                                                    <a href="#"><i class="mdi mdi-heart"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-dsc">--}}
{{--                                                <p><a href="#">men’s Blue t-shirt</a></p>--}}
{{--                                                <span>$77.00</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- single product end -->--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <button id="load-more-four">Load More</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- popular product end -->--}}
            </div>
        </div>
    </div>
    <!-- tab-products section end -->
    <!-- blog section start -->
    <section class="latest-blog section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2>Latest Blog</h2>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <ul class="load-list load-list-blog">
                    <li>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img
                                                src="{{ asset('img/370x255/rsz_453bc502-370b-431b-a289-5a99739af402.jpg') }}"
                                                alt=""/></a></div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">Fashion style fine arts drawing</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 25, 2016</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img
                                                src="{{ asset('img/370x255/rsz_9982178_l-370x255.jpg') }}" alt=""/></a>
                                    </div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">women’s Fashion style 2016</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 15, 2016</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img
                                                src="{{ asset('img/370x255/rsz_canwegetronafrompets_1024.jpg') }}"
                                                alt=""/></a></div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">women’s winter Fashion style</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 22, 2016</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img
                                                src="{{ asset('img/370x255/rsz_dogily-petshop-370608.jpg') }}" alt=""/></a>
                                    </div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">women’s winter Fashion style</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 22, 2016</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img
                                                src="{{ asset('img/370x255/rsz_file-20191114-26207-lray93.jpg') }}"
                                                alt=""/></a></div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">Fashion style fine arts drawing</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 25, 2016</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="l-blog-text">
                                    <div class="banner"><a href="single-blog.html"><img
                                                src="{{ asset('img/370x255/rsz_kitten-440379.jpg') }}" alt=""/></a>
                                    </div>
                                    <div class="s-blog-text">
                                        <h4><a href="single-blog.html">women’s Fashion style 2016</a></h4>
                                        <span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form, by injected humour....</p>
                                    </div>
                                    <div class="date-read clearfix">
                                        <a href="#"><i class="mdi mdi-clock"></i> jun 15, 2016</a>
                                        <a href="single-blog.html">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <button id="load-more-blog">Load More</button>
            </div>
        </div>
    </section>
    <!-- blog section end -->

@endsection
