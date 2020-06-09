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
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">List</li>
                            </ol>
                        </nav>
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
                    <div class="card-header border-0">
                        <h3 class="mb-0">Users List</h3>
                    </div>
                    <div class="row">

                        <div class="col-1 text-center">
                            <a href="{{route('users.create')}}" class="btn btn-sm btn-success">New</a>
                        </div>
                        <div class="col-7"><p>{{session('success')}}</p>/div>
                        <div class="col-4 text-right">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control btn-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort">#</th>
                                <th scope="col" class="text-center">ID</th>
                                <th scope="col" class="text-center">Image</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col"></th>

                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($users as $key=>$user)
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <td class="text-center">{{$user->id}}</td>
                                <td class="text-center">{{'image'}}</td>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->username}}</td>
                                <td class="text-right">
                                    <a type="button" class="btn btn-outline-info btn-sm">View</a>
                                    <a type="button" class="btn btn-outline-primary btn-sm">Edit</a>
                                    <a type="button" class="btn btn-outline-danger btn-sm">Delete</a>
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
@endsection
