@extends('home-admin')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></li>
                                <li class="breadcrumb-item active" aria-current="page">List</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="{{ route('product.create') }}" class="btn btn-sm btn-success">New</a>
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
                        <h3 class="mb-0">Pet List</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort">#</th>
                                <th scope="col" class="text-center">Pet Code</th>
                                <th scope="col" class="text-center">Image</th>
                                <th scope="col" class="text-center">Origination</th>
                                <th scope="col" class="text-center">Category</th>
                                <th scope="col" class="text-center">Action</th>

                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($products as $key=>$product)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td class="text-center">{{$product->product_code}}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->image }}" height="85" width="65">
                                    </td>
                                    <td class="text-center">{{$product->origination}}</td>
                                    <td class="text-center">{{$product->category->name}}</td>
                                    <td class="text-center">
                                        <a href="" type="button" class="btn btn-outline-info btn-sm">View</a>
                                        <a href="{{ route('product.edit',$product->id) }}" type="button" class="btn btn-outline-primary btn-sm">Edit</a>
                                        <a href="{{ route('product.delete',$product->id) }}" type="button" class="btn btn-outline-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            {{ $products->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
@endsection

