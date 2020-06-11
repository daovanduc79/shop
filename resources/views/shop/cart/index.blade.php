@extends('shop.layout.shopLayout')
@section('shop-content')

    <!-- pages-title-start -->
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2>Cart</h2>
                        <ul class="text-left">
                            <li><a href="{{route('shop.index')}}">Shop </a></li>
                            <li><span> // </span>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pages-title-end -->
    <!-- cart content section start -->
    <section class="pages cart-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive padding60">
                        <table class="wishlist-table text-center">
                            <thead>
                            <tr>
                                <th>Product Code</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(session('cart'))
                                @foreach($cart->items as $product)
                                    <tr>
                                        <td>{{$product['item']->product_code}}</td>
                                        <td class="img-center">
                                            <a href="#"><img width="140px" height="100px"
                                                             src="{{asset('storage/'.$product['item']->image)}}"
                                                             alt="Add Product"/></a>
                                        </td>
                                        <td>{{$product['item']->price}}</td>
                                        <td><a href="{{route('shop.removeProductIntoCart',['productId'=>$product['item']->id])}}"><i class="mdi mdi-close" title="Remove this product"></i></a></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row margin-top">
                <div class="col-sm-6">
                    <div class="single-cart-form padding60">
                        <div class="log-title">
                            <h3><strong>coupon discount</strong></h3>
                        </div>
                        <div class="cart-form-text custom-input">
                            <p>Enter your coupon code if you have one!</p>
                            <form action="mail.php" method="post">
                                <input type="text" name="subject" placeholder="Enter your code here..."/>
                                <div class="submit-text coupon">
                                    <button type="submit">apply coupon</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-cart-form padding60">
                        <div class="log-title">
                            <h3><strong>payment details</strong></h3>
                        </div>
                        <div class="cart-form-text pay-details table-responsive">
                            <table>
                                @if(session('cart'))
                                    <tbody>
                                    <tr>
                                        <th>Cart Subtotal</th>
                                        <td>{{$cart->totalPrice}}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping and Handing</th>
                                        <td>$00.00</td>
                                    </tr>
                                    <tr>
                                        <th>Vat</th>
                                        <td>$00.00</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th class="tfoot-padd">Order total</th>
                                        <td class="tfoot-padd">{{$cart->totalPrice}}</td>
                                    </tr>
                                    </tfoot>
                                @endif
                            </table>
                            <div class="submit-text coupon">
                                <a href="" class="btn">Check out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-top">
                <div class="col-xs-12">
                    <div class="padding60">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="single-cart-form">
                                    <div class="log-title">
                                        <h3><strong>calculate shipping</strong></h3>
                                    </div>
                                    <div class="cart-form-text custom-input">
                                        <p>Enter your coupon code if you have one!</p>
                                        <form action="mail.php" method="post">
                                            <input type="text" name="country" placeholder="Country"/>
                                            <div class="submit-text">
                                                <button type="submit">get a quote</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="single-cart-form">
                                    <div class="cart-form-text post-state custom-input">
                                        <form action="mail.php" method="post">
                                            <input type="text" name="state" placeholder="Region / State"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="single-cart-form">
                                    <div class="cart-form-text post-state custom-input">
                                        <form action="mail.php" method="post">
                                            <input type="text" name="subject" placeholder="Post Code"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart content section end -->

@endsection
