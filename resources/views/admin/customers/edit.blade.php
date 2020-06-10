@extends('home-admin')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Users</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">
                                        <i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Customers</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit</li>
                            </ol>
                        </nav>
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
                        <h2 class="mb-0">Customers Edit {{$customer->name}}</h2>
                    </div>
                    <div class="card-body">
                        {{--                    <p style="color: red">{{session('create-error')}}</p>--}}
                        <form method="post" action="{{route('customers.edit', ['id'=>$customer->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1">MKH</label>
                                <input class="form-control py-4" name="id" disabled type="text" value="{{$customer->id}}"/>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Name</label>
                                <input class="form-control py-4" name="name" type="text" value="{{$customer->name}}"/>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Email</label>
                                <input class="form-control py-4" name="email" disabled type="email" value="{{$customer->email}}"/>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Phone</label>
                                <input class="form-control py-4" name="phone" type="text" value="{{$customer->phone}}"/>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Address</label>
                                <input class="form-control py-4" name="address" type="text" value="{{$customer->address}}"/>
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="{{route('customers.index')}}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
