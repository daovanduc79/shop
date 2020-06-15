<!-- quick view start -->
<div class="product-details quick-view modal animated zoomInUp" id="quick-view{{$product->id}}">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="d-table">
                    <div class="d-tablecell">
                        <div class="modal-dialog">
                            <div class="main-view modal-content">
                                <div class="modal-footer" data-dismiss="modal">
                                    <span>x</span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="quick-image">
                                            <div class="single-quick-image text-center">
                                                <div class="list-img">
                                                    <div class="product-img tab-content">
                                                        <div class="simpleLens-container tab-pane fade in"
                                                             id="q-sin-1">
                                                            <div class="pro-type">
                                                                <span>{{$product->sale}}</span>
                                                            </div>
                                                            <a class="simpleLens-image"
                                                               data-lens-image="img/products/z1.jpg" href="#"><img
                                                                    src="img/products/z1.jpg" alt=""
                                                                    class="simpleLens-big-image"></a>
                                                        </div>
                                                        <div class="simpleLens-container tab-pane active fade in"
                                                             id="q-sin-2">
                                                            <div class="pro-type sell">
                                                                <span>sell</span>
                                                            </div>
                                                            <a class="simpleLens-image"
                                                               data-lens-image="img/products/z2.jpg" href="#"><img
                                                                    src="img/products/z2.jpg" alt=""
                                                                    class="simpleLens-big-image"></a>
                                                        </div>
                                                        <div class="simpleLens-container tab-pane fade in"
                                                             id="q-sin-3">
                                                            <div class="pro-type">
                                                                <span>-15%</span>
                                                            </div>
                                                            <a class="simpleLens-image"
                                                               data-lens-image="img/products/z3.jpg" href="#"><img
                                                                    src="img/products/z3.jpg" alt=""
                                                                    class="simpleLens-big-image"></a>
                                                        </div>
                                                        <div class="simpleLens-container tab-pane fade in"
                                                             id="q-sin-4">
                                                            <div class="pro-type">
                                                                <span>new</span>
                                                            </div>
                                                            <a class="simpleLens-image"
                                                               data-lens-image="img/products/z4.jpg" href="#"><img
                                                                    src="img/products/z4.jpg" alt=""
                                                                    class="simpleLens-big-image"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quick-thumb">
                                                <ul class="product-slider">
                                                    <li><a data-toggle="tab" href="#q-sin-1"> <img
                                                                src="img/products/s1.jpg" alt="quick view"/> </a>
                                                    </li>
                                                    <li class="active"><a data-toggle="tab" href="#q-sin-2"> <img
                                                                src="img/products/s2.jpg" alt="small image"/> </a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#q-sin-3"> <img
                                                                src="img/products/s3.jpg" alt="small image"/> </a>
                                                    </li>
                                                    <li><a data-toggle="tab" href="#q-sin-4"> <img
                                                                src="img/products/s4.jpg" alt="small image"/> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="quick-right">
                                            <div class="list-text">
                                                <h3>{{ $product->product_code }}</h3>
                                                <hr>
                                                <span><h5>{{ $product->category->name }}</h5></span>
                                                <div class="ratting floatright">
                                                    <p>( 27 Rating )</p>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star-half"></i>
                                                    <i class="mdi mdi-star-outline"></i>
                                                </div>
                                                <h5>
                                                    <del>$790.30</del>
                                                    ${{ $product->price }}
                                                </h5>
                                                <p>There are many variations of passages of Lorem Ipsum available,
                                                    but the majority have be suffered alteration in some form, by
                                                    injected humour, or randomised words which donot look even
                                                    slightly believable. If you are going to use a passage of Lorem
                                                    Ipsum, you neede be sure there isn't anything embarrassing
                                                    hidden in the middle of text. Lorem Ipsum is simply dummy text
                                                    of the printing and typesetting industry.</p>
                                                <div class="all-choose">
                                                    <div class="s-shoose">
                                                        <h5>Fur Color</h5>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn">{{ $product->fur_color }}</button>
                                                        </div>
                                                    </div>
                                                    <div class="s-shoose">
                                                        <h5>size</h5>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn">{{ $product->weight }}</button>
                                                            </div>
                                                    </div>
                                                    <div class="s-shoose">
                                                        <h5>qty</h5>

                                                    </div>
                                                </div>
                                                <div class="list-btn">
                                                    <a href="{{route('shop.addToCart',['productId'=>$product->id])}}">add to cart</a>
                                                    <a href="{{ route('shop.showCart') }}">wishlist</a>
                                                </div>
                                                <div class="share-tag clearfix">
                                                    <ul class="blog-share floatleft">
                                                        <li><h5>share </h5></li>
                                                        <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                                        <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                                        <li><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                                        <li><a href="#"><i class="mdi mdi-vimeo"></i></a></li>
                                                        <li><a href="#"><i class="mdi mdi-dribbble"></i></a></li>
                                                        <li><a href="#"><i class="mdi mdi-instagram"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- quick view end -->
