<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PetsShop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico')}}">

    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png')}}">
    <!-- Place favicon.ico in the root directory -->
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css')}}">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="{{ asset('css/jquery.simpleLens.css')}}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css')}}">
    <!-- nivo.slider css -->
    <link rel="stylesheet" href="{{ asset('css/nivo-slider.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
    <!-- modernizr js -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>

@include('shop.core.header')

@yield('shop-content')

@include('shop.core.footer')

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

{!! Toastr::message() !!}
<script src="{{ asset('js/vendor/jquery-1.12.3.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{ asset('js/jquery.meanmenu.js')}}"></script>
<!-- countdown JS -->
<script src="{{ asset('js/countdown.js')}}"></script>
<!-- nivo.slider JS -->
<script src="{{ asset('js/jquery.nivo.slider.pack.js')}}"></script>
<!-- simpleLens JS -->
<script src="{{ asset('js/jquery.simpleLens.min.js')}}"></script>
<!-- jquery-ui js -->
<script src="{{ asset('js/jquery-ui.min.js')}}"></script>
<!-- load-more js -->
<script src="{{ asset('js/load-more.js')}}"></script>
<!-- plugins js -->
<script src="{{ asset('js/plugins.js')}}"></script>
<!-- main js -->
<script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
