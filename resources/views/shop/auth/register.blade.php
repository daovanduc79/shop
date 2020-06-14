@extends('shop.layout.shopLayout')
@section('shop-content')
    <!-- pages-title-start -->
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2>Sign in to continue</h2>
                        <ul class="text-left">
                            <li><a href="{{route('shop.index')}}">Home </a></li>
                            <li><span> // </span>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pages-title-end -->
    <!-- login content section start -->
    <section class="pages login-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="main-input padding60 new-customer">
                        <div class="log-title">
                            <h3><strong>new customers</strong></h3>
                        </div>
                        <div class="custom-input">
                            <form action="{{route('registerActive-shop')}}" method="post">
                                @csrf
                                <input type="text" class="form-control py-4
                                    @if($errors->first('name'))
                                        is-invalid
                                    @endif
                                    " value="{{ old('name') }}" name="name" placeholder="Enter name">
                                    @if($errors->first('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                    @endif
                                <input type="email" class="form-control py-4
                                    @if($errors->first('email'))
                                        is-invalid
                                    @endif
                                    " value="{{ old('email') }}" name="email" placeholder="Email address">
                                    @if($errors->first('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                <input type="text" class="form-control py-4
                                    @if($errors->first('phone'))
                                        is-invalid
                                    @endif
                                    " value="{{ old('phone') }}" name="phone" placeholder="Phone number">
                                    @if($errors->first('phone'))
                                    <p class="text-danger">{{ $errors->first('phone') }}</p>
                                    @endif
                                <input type="password" class="form-control py-4
                                    @if($errors->first('password'))
                                        is-invalid
                                    @endif
                                    " name="password" placeholder="Password">
                                    @if($errors->first('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                <input type="password" class="form-control py-4
                                    @if($errors->first('confirm'))
                                        is-invalid
                                    @endif
                                    " name="confirm" placeholder="Confirm password">
                                    @if($errors->first('confirm'))
                                    <p class="text-danger">{{ $errors->first('confirm') }}</p>
                                    @endif
                                <div class="submit-text coupon">
                                    <button type="submit">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </section>
    <!-- login content section end -->
@endsection
