@extends('shop.layout.shopLayout')
@section('shop-content')

    <script src="{{asset('js/cart.js')}}"></script>
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
                                <th>Code</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(session('cart'))
                                @foreach($cart->items as $product)
                                    <tr>
                                        <td>{{$product['item']->product_code}}</td>
                                        <td class="td-img text-left">
                                            <a href="#"><img width="83" height="108"
                                                             src="{{asset('storage/'.$product['item']->image)}}"
                                                             alt="Add Product"/></a>
                                            <div class="items-dsc">
                                                <h5><a href="#">{{$product['item']->product_code}}</a></h5>
                                                <p class="itemcolor">Color :
                                                    <span>{{$product['item']->fur_color}}</span></p>
                                                <p class="itemcolor">Size : <span>{{$product['item']->weight}}</span>
                                                </p>
                                            </div>
                                        </td>
                                        <td>{{$product['item']->price}}$</td>
                                        <td><i class="mdi mdi-close" title="Remove this product"></i></td>
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
                            <input type="text" id="couponDiscount" placeholder="Enter your code here..."/>
                            <p style="color: red" id="notExist"></p>
                            <div class="submit-text coupon">
                                <button type="submit" onclick="checkDiscount()">apply coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="padding60">
                        <div class="log-title">
                            <h3><strong>Payment method</strong></h3>
                        </div>
                        <div class="categories">
                            <p>Choose the form of payment</p>
                            <br>
                            <div class="cart-form-text custom-input">
                                <input type="button" id="cash" onclick="changePaymentMethod('Cash')" value="CASH">
                            </div>
                            <br>
                            <div class="cart-form-text custom-input">
                                <input type="button" id="transfer" onclick="changePaymentMethod('Transfer')"  value="TRANSFER">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row margin-top">
                <div class="col-sm-12">
                    <div class="single-cart-form padding60">
                        <div class="log-title">
                            <h3><strong>payment details</strong></h3>
                        </div>
                        <div class="cart-form-text pay-details table-responsive">

                            @if(session('cart'))
                                <form action="{{route('shop.checkout')}}" method="post">
                                    @csrf
                                    <table>
                                        <tbody>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td><input style="border: 0; text-align: right" name="cartSubtotal"
                                                       value="{{$cart->totalPrice}}" readonly id="cartSubtotal">$
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Coupon Discount</th>
                                            <td><input style="border: 0; text-align: right" id="discount" name="discount" value="" readonly>$
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Vat</th>
                                            <td><input style="border: 0; text-align: right" name="vat"
                                                       value="{{$cart->totalPrice * 0.15}}" readonly id="vat">$
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Payment Method</th>
                                            <td><input style="border: 0; text-align: right" id="payment_method" name="payment_method"
                                                       value="Cash" readonly>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th class="tfoot-padd">Order total</th>
                                            <td class="tfoot-padd"><input style="border: 0; text-align: right"
                                                                          name="orderTotal"
                                                                          value="{{$cart->totalPrice + $cart->totalPrice * 0.15}}" readonly id="orderTotal">$
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <div class="submit-text coupon">
                                        <button type="submit">Checkout</button>
                                    </div>
                                </form>
                            @else
                                <form>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td><input style="border: 0; text-align: right"
                                                       value="$00.00"></td>
                                        </tr>
                                        <tr>
                                            <th>Coupon Discount</th>
                                            <td><input style="border: 0; text-align: right" id="discount"
                                                       value="$00.00"></td>
                                        </tr>
                                        <tr>
                                            <th>Vat</th>
                                            <td><input style="border: 0; text-align: right"
                                                       value="$00.00"></td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th class="tfoot-padd">Order total</th>
                                            <td class="tfoot-padd"><input style="border: 0; text-align: right"
                                                                          value="$00.00">
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <input type="hidden" name="information">
                                    <div class="submit-text coupon">
                                        <button type="submit">Checkout</button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart content section end -->

@endsection
