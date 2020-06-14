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
                            <li><span> // </span>Login</li>
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
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
                        <div class="btn-wrapper text-center">
                            <a href="#" class="btn btn-default btn-icon">
                                <span class="btn-inner--icon"><img src="{{asset('assets/img/icons/common/github.svg')}}"></span>
                                <span class="btn-inner--text">Github</span>
                            </a>
                            <a href="{{route('auth.google')}}" class="btn btn-default btn-icon">
                                <span class="btn-inner--icon"><img src="{{asset('assets/img/icons/common/google.svg')}}"></span>
                                <span class="btn-inner--text">Google</span>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="main-input padding60">
                        <div class="login-text">
                            <div class="custom-input">
                                <p>If you have an account with us, Please log in!</p>
                                <form action="{{route('login-shop')}}" method="post">
                                    @csrf
                                    <input type="text" name="email" placeholder="Email"/>
                                    <input type="password" name="password" placeholder="Password"/>
                                    <a class="forget" href="#">Forget your password?</a><br><br>
                                    <a class="forget text-right" href="#">Register?</a>
                                    <div class="submit-text">
                                        <button type="submit">login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </section>
    <!-- login content section end -->
@endsection
