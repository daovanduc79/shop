<header class="header-one header-two">
    <div class="header-top-two">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="middel-top">
                        <div class="left floatleft">
                            <p><i class="mdi mdi-clock"></i> Mon-Fri : 09:00-19:00</p>
                        </div>
                    </div>
                    <div class="middel-top clearfix">
                        <ul class="clearfix right floatright">
                            <li>
                                <a href="#"><i class="mdi mdi-account"></i></a>
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="login.html">Registar</a></li>
                                    <li><a href="my-account.html">My account</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="mdi mdi-settings"></i></a>
                                <ul>
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="cart.html">My cart</a></li>
                                    <li><a href="wishlist.html">My wishlist</a></li>
                                    <li><a href="checkout.html">Check out</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="right floatright">
                            <form action="#" method="get">
                                <button type="submit"><i class="mdi mdi-magnify"></i></button>
                                <input type="text" placeholder="Search within these results..."/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <a href="index.html"><img src="img/logo2.png" alt="Sellshop"/></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="header-middel">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="{{route('home.index')}}">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home version one</a></li>
                                        <li><a href="index-2.html">Home version two</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('shop.index') }}">Shop</a>
                                    <ul class="magamenu">
                                        <li class="banner"><a href="shop.html"><img
                                                    src="{{ asset('img/150x250/dog.jpeg') }}" alt=""/></a></li>
                                        @foreach($pets as $pet)
                                            <li><h5>{{$pet->name}}</h5>
                                                <ul>
                                                    @foreach($pet->categories->all() as $category)
                                                        <li><a href="#">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                        <li class="banner"><a href="shop.html"><img
                                                    src="{{ asset('img/150x250/cat.jpg') }}" alt=""/></a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home version one</a></li>
                                            <li><a href="index-2.html">Home version two</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul>
                                            <li><h5>dogs</h5>
                                                <ul>
                                                    <li><a href="#">Shirts & Top</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shemwear</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Sweaters</a></li>
                                                    <li><a href="#">Jacket</a></li>
                                                    <li><a href="#">Men Watch</a></li>
                                                </ul>
                                            </li>
                                            <li><h5>women’s wear</h5>
                                                <ul>
                                                    <li><a href="#">Shirts & Tops</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Dresses</a></li>
                                                    <li><a href="#">Shemwear</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Sweaters</a></li>
                                                    <li><a href="#">Jacket</a></li>
                                                    <li><a href="#">Women Watch</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="product-grid.html">Product Grid View</a></li>
                                            <li><a href="product-list.html">Product List View</a></li>
                                            <li><a href="single-product.html">Single Product</a></li>
                                            <li><a href="error-404.html">404 page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog-style-1.html">Blog Style One</a></li>
                                            <li><a href="blog-style-2.html">Blog Style Two</a></li>
                                            <li><a href="single-blog.html">Single Blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="cart-itmes">
                    <a class="cart-itme-a" href="{{route('shop.showCart')}}">
                        <i class="mdi mdi-cart"></i>
                        {{count($cart->items)}} items : <strong>{{$cart->totalPrice}}</strong>
                    </a>
                    <div class="cartdrop">
                        @foreach($cart->items as $product)
                            <div class="sin-itme clearfix">
                                <a href="{{route('shop.removeProductIntoCart', ['productId'=>$product['item']->id])}}"><i
                                        class="mdi mdi-close"></i></a>
                                <a class="cart-img" href="{{route('shop.showCart')}}"><img width="83" height="108"
                                                                                           src="{{asset('storage/'.$product['item']->image)}}"
                                                                                           alt=""/></a>
                                <div class="menu-cart-text">
                                    <h5>{{$product['item']->product_code}}</h5>
                                    <strong>${{$product['item']->price}}</strong>
                                </div>
                            </div>
                        @endforeach
                        <div class="total">
                            <span>total <strong>= ${{$cart->totalPrice}}</strong></span>
                        </div>
                        <a class="goto" href="{{route('shop.showCart')}}">go to cart</a>
                        <a class="out-menu" href="{{route('shop.showCheckout')}}">Check out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
