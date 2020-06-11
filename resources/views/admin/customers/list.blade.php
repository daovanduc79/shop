@extends('home-admin')
@section('object', 'customers')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-md-6">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <nav aria-label="breadcrumb"
                                         class="d-none d-md-inline-block ml-md-4 container-fluid">
                                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i
                                                        class="fas fa-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Customers</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">List</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral">New</a>
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
                    <div class="card-header border-0 col-6">
                        <h2 class="mb-0">Customers</h2>
                    </div>
                    <div class="row">
                        <div class="col-7 text-center"><p style="color: green">{{session('success')}}</p></div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort">#</th>
                                <th scope="col" class="text-center">ID</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">Phone</th>
                                <th scope="col" class="text-center">Address</th>
                                <th scope="col" class="sort"></th>

                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($customers as $key=>$customer)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td class="text-center"><a>{{$customer->id}}</a></td>
                                    <td class="text-center">{{$customer->name}}</td>
                                    <td class="text-center">{{$customer->email}}</td>
                                    <td class="text-center">{{$customer->phone}}</td>
                                    <td class="text-center">{{$customer->address}}</td>
                                    <td class="text-right">
                                        <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModal{{$customer->id}}">View</button>
                                        <a href="{{route('customers.edit', ['id'=>$customer->id])}}"
                                           class="btn btn-outline-primary btn-sm">Edit</a>
                                        <a href="{{route('customers.delete',['id'=>$customer->id])}}"
                                           class="btn btn-outline-danger btn-sm"
                                           onclick="return confirm('Do you want to delete ???')">Delete</a>
                                        @include('admin.customers.view')
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
