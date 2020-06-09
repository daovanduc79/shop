@extends('master')
@section('master')
    @include('layouts/menu-left')
    <div class="main-content" id="panel">
        @include('layouts/menu-top')
        @yield('content')

{{--        @include('layouts/footer')--}}
    </div>
@endsection
