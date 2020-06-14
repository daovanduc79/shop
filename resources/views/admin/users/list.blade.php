@extends('home-admin')
@section('object', 'users')
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
                                            <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">List</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="{{route('users.create')}}" class="btn btn-sm btn-neutral">New</a>
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
                        <h2 class="mb-0">Users List</h2>
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
                                <th scope="col" class="text-center">Image</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Email</th>
                                <th scope="col" class="text-center">Role</th>
                                <th scope="col" class="sort"></th>

                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($users as $key=>$user)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td class="text-center"><img src="
                                    @if($user->image)
                                        {{asset('storage/'.$user->image)}}
                                        @else
                                        {{asset('img/default/avatar.jpg')}}
                                        @endif" width="70px" height="70px"></td>
                                    <td class="text-center">{{$user->name}}</td>
                                    <td class="text-center">{{$user->username}}</td>
                                    <td class="text-center">
                                        @switch($user->role)
                                            @case(\App\Http\Controllers\RoleConstant::ADMIN) {{'Admin'}} @break
                                            @case(\App\Http\Controllers\RoleConstant::USER) {{'User'}} @break
                                            @case(\App\Http\Controllers\RoleConstant::MEMBER) {{'Member'}} @break
                                        @endswitch
                                    </td>
                                    <td class="text-right">
                                        <a class="btn btn-outline-info btn-sm">View</a>
                                        <a href="{{route('users.edit', ['id'=>$user->id])}}"
                                           class="btn btn-outline-primary btn-sm">Edit</a>
                                        <a href="{{route('users.delete',['id'=>$user->id])}}"
                                           class="btn btn-outline-danger btn-sm"
                                           onclick="return confirm('Do you want to delete ???')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            {{ $users->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
