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
                                    <li><a href="{{route('login-shop.form')}}">Login</a></li>
                                    <li><a href="login.html">Register</a></li>
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
                                </li>
                                <li><a href="{{ route('shop.index') }}">Shop</a>
                                    <ul class="magamenu">
                                        <li class="banner"><a href="{{ route('shop.index') }}"><img
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
                                        <li class="banner"><a href="{{ route('shop.index') }}"><img
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
                                    <li><a href="{{route('home.index')}}">Home</a>
                                    </li>
                                    <li><a href="{{ route('shop.index') }}">Shop</a>
                                        <ul class="magamenu">
                                            <li class="banner"><a href="{{ route('shop.index') }}"><img
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
                                            <li class="banner"><a href="{{ route('shop.index') }}"><img
                                                        src="{{ asset('img/150x250/cat.jpg') }}" alt=""/></a></li>
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
                    <a class="cart-itme-a" href="cart.html">
                        <i class="mdi mdi-cart"></i>
                        02 items : <strong>$86.00</strong>
                    </a>
                    <div class="cartdrop">
                        <div class="sin-itme clearfix">
                            <i class="mdi mdi-close"></i>
                            <a class="cart-img" href="cart.html"><img src="img/cart/1.png" alt=""/></a>
                            <div class="menu-cart-text">
                                <a href="#"><h5>men’s black t-shirt</h5></a>
                                <span>Color :  Black</span>
                                <span>Size :     SL</span>
                                <strong>$122.00</strong>
                            </div>
                        </div>
                        <div class="sin-itme clearfix">
                            <i class="mdi mdi-close"></i>
                            <a class="cart-img" href="cart.html"><img src="img/cart/2.png" alt=""/></a>
                            <div class="menu-cart-text">
                                <a href="#"><h5>men’s black t-shirt</h5></a>
                                <span>Color :  Black</span>
                                <span>Size :     SL</span>
                                <strong>$132.00</strong>
                            </div>
                        </div>
                        <div class="total">
                            <span>total <strong>= $306.00</strong></span>
                        </div>
                        <a class="goto" href="cart.html">go to cart</a>
                        <a class="out-menu" href="checkout.html">Check out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
