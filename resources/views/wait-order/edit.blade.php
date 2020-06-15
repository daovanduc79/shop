@extends('home-admin')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">
                                        <i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('waitOrders.index')}}">Wait Order</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header border-0">
                        <h2 class="mb-0">Edit Wait Order {{$waitOrder->id}}</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('waitOrders.update',['id'=>$waitOrder->id])}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="small mb-1">Payment Method</label>
                                    <select name="payment_method"
                                            class="form-control">
                                        <option
                                            value="Cash" {{(old('payment_method')?old('payment_method'):$waitOrder->payment_method)=='Cash'?'selected':''}}>
                                            Cash
                                        </option>
                                        <option
                                            value="Transfer" {{(old('payment_method')?old('payment_method'):$waitOrder->payment_method)=='Transfer'?'selected':''}}>
                                            Transfer
                                        </option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Note</label>
                                    <input class="form-control py-4" value="{{$waitOrder->note}}" name="note">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Edit</button>
                                    <a href="{{route('waitOrders.index')}}" class="btn btn-light">Cancel</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
