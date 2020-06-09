@extends('master')
@section('master')
    @include('layouts/menu-left')
    <div class="main-content" id="panel">
        @include('layouts/menu-top')
        @include('layouts/dashboards/default')


    </div>
    <div class="container-fluid mt--6">
        @include('layouts/dashboards/chart')
        @include('layouts/footer')
    </div>
@endsection
