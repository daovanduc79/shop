@extends('shop.layout.shopLayout')
@section('shop-content')
    <!-- pages-title-start -->
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2>Checkout</h2>
                        <ul class="text-left">
                            <li><a href="{{route('shop.index')}}">Shop</a></li>
                            <li><span> // </span><a href="{{route('shop.showCart')}}">Cart</a></li>
                            <li><span> // </span>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pages-title-end -->
    <!-- Checkout content section start -->
    <section class="pages checkout section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-input single-cart-form padding60">
                        <div class="custom-input">
                            <form action="{{route('shop.checkout')}}" method="post">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="padding60">
                                        <div class="log-title">
                                            <h3><strong>Our order</strong></h3>
                                        </div>
                                        <div class="cart-form-text pay-details table-responsive">
                                            <table>
                                                @if(session('cart'))
                                                    <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <td>Total</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($cart->items as $product)
                                                    <tr>
                                                        <th>{{$product['item']->product_code}}</th>
                                                        <td>{{$product['item']->price}}</td>
                                                    </tr>
                                                    @endforeach
                                                    <tr>
                                                        <th>Cart Subtotal</th>
                                                        <td>{{$cart->totalPrice}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shipping and Handing</th>
                                                        <td>$15.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Vat</th>
                                                        <td>$00.00</td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <th>Order total</th>
                                                        <td>$325.00</td>
                                                    </tr>
                                                    </tfoot>
                                                @endif
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="log-title">
                                    <h3><strong>Note</strong></h3>
                                </div>
                                <div class="custom-mess">
                                    <textarea rows="2" placeholder="Order notes here..." name="message"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-top">
                <div class="col-xs-12 col-sm-12">
                    <div class="padding60">
                        <div class="log-title">
                            <h3><strong>Payment method</strong></h3>
                        </div>
                        <div class="categories">
                            <ul id="accordion" class="panel-group clearfix">
                                <li class="panel">
                                    <div data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
                                        <div class="medium-a">
                                            direct bank transfer
                                        </div>
                                    </div>
                                    <div class="panel-collapse collapse in" id="collapse1">
                                        <div class="normal-a">
                                            <p>Lorem Ipsum is simply in dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="panel">
                                    <div data-toggle="collapse" data-parent="#accordion" data-target="#collapse2">
                                        <div class="medium-a">
                                            cheque payment
                                        </div>
                                    </div>
                                    <div class="paypal-dsc panel-collapse collapse" id="collapse2">
                                        <div class="normal-a">
                                            <p>Lorem Ipsum is simply in dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="panel">
                                    <div data-toggle="collapse" data-parent="#accordion" data-target="#collapse3">
                                        <div class="medium-a">
                                            paypal
                                        </div>
                                    </div>
                                    <div class="paypal-dsc panel-collapse collapse" id="collapse3">
                                        <div class="normal-a">
                                            <p>Lorem Ipsum is simply in dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="submit-text">
                                <button type="submit">place order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout content section end -->
@endsection
