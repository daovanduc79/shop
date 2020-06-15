@extends('home-admin')
@section('object','waitOrders')
@section('content')

    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Wait Order</a></li>
                                <li class="breadcrumb-item active" aria-current="page">List</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Light table</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive text-center">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="status">Name</th>
                                <th scope="col" class="sort" data-sort="budget">Total Qty</th>
                                <th scope="col" class="sort" data-sort="completion">Total Order</th>
                                <th scope="col" class="sort" data-sort="completion">Payment Method</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($waitOrders as $key => $waitOrder)
                                <tr>
                                    <th scope="row">
                                        {{++$key}}
                                    </th>
                                    <td>
                                        {{$waitOrder->id}}
                                    </td>
                                    <td>
                                        {{$waitOrder->totalQty}}
                                    </td>
                                    <td>
                                        {{$waitOrder->totalOrder}}$
                                    </td>
                                    <td>
                                        {{$waitOrder->payment_method}}
                                    </td>
                                    <td class="text-right">
                                        <a href="#" type="button" data-toggle="modal"
                                           data-target="#quick-view{{$waitOrder->id}}"
                                           class="btn btn-outline-info btn-sm">View</a>
                                        <a href="{{route('waitOrders.edit',['id'=>$waitOrder->id])}}" type="button"
                                           class="btn btn-outline-primary btn-sm">Edit</a>
                                        <a onclick="return confirm('Are you delete?')"
                                           href="{{route('waitOrders.delete',['id'=>$waitOrder->id])}}" type="button"
                                           class="btn btn-outline-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            {{--                            {{ $waitOrders->links() }}--}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($waitOrders as $waitOrder)
        <div class="product-details quick-view modal animated zoomInUp" id="quick-view{{$waitOrder->id}}">
            <div class="container">
                <div class="row">
                    <div class="main-view modal-content">
                        <div class="modal-footer" data-dismiss="modal">
                            <span>x</span>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="padding60">
                                        <div class="log-title">
                                            <h2><strong>Products</strong></h2>
                                        </div>
                                        <div class="categories">
                                            <table class="container">
                                                <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Product</th>
                                                    <th>Attributes</th>
                                                    <th>Price</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($waitOrder->products->all() as $product)
                                                    <tr>
                                                        <td><h5><a href="#">{{$product->product_code}}</a></h5></td>
                                                        <td class="td-img text-left">
                                                            <a href="#"><img width="83" height="108"
                                                                             src="{{asset('storage/'.$product->image)}}"
                                                                             alt="Add Product"/></a>
                                                        </td>
                                                        <td>
                                                            <p class="itemcolor">Color :
                                                                <span>{{$product->fur_color}}</span></p>
                                                            <p class="itemcolor">Size :
                                                                <span>{{$product->weight}}</span>
                                                            </p>
                                                        </td>
                                                        <td>{{$product->price}}$</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="padding60">
                                        <div class="log-title">
                                            <h2><strong>Customer</strong></h2>
                                        </div>
                                        <div class="categories">
                                            <h3>Information</h3>
                                            <p>ID: {{$waitOrder->user->id}}</p>
                                            <p>Name: {{$waitOrder->user->name}}</p>
                                            <p>Email: {{$waitOrder->user->username}}</p>
                                            <p>Phone: {{$waitOrder->user->phone}}</p>
                                            <p>Address: {{$waitOrder->user->phone}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="padding60">
                                        <div class="log-title">
                                            <h2><strong>Wait Order</strong></h2>
                                        </div>
                                        <div class="categories">
                                            <h3>Detail</h3>
                                            <p>Name: {{$waitOrder->id}}</p>
                                            <p>Total Qty: {{$waitOrder->totalQty}}</p>
                                            <p>Discount: {{$waitOrder->discount->name}} - {{$waitOrder->discount->price}}$</p>
                                            <p>Vat: {{$waitOrder->totalPrice * 0.15}}$</p>
                                            <p>Payment Method: {{$waitOrder->payment_method}}</p>
                                            <p>Note: {{$waitOrder->note}}</p>
                                            <p>Total Order: {{$waitOrder->totalOrder}}$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <span><a href="{{route('orders.create',['idWaitOrder'=>$waitOrder->id])}}" class="btn btn-primary" style="color: white">Agree</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
