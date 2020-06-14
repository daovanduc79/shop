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
                                <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
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
                        <h2 class="mb-0">Users Edit {{$user->name}}</h2>
                    </div>
                    <div class="card-body">
                        {{--                    <p style="color: red">{{session('create-error')}}</p>--}}
                        <form method="post" action="{{route('users.edit', ['id'=>$user->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1">Name</label>
                                <input required class="form-control py-4
                                @if($errors->first('name'))
                                    is-invalid
                                @endif
                                    " value="{{ $user->name }}" name="name" placeholder="Enter name">
                                @if($errors->first('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control py-4" name="email" type="email" disabled
                                       value="{{$user->username}}"/>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Role</label>
                                <select name="role" class="form-control">
                                    <option value="{{\App\Http\Controllers\RoleConstant::ADMIN}}"
                                            @if($user->role === \App\Http\Controllers\RoleConstant::ADMIN)
                                            selected
                                                @endif
                                    >Admin
                                    </option>
                                    <option value="{{\App\Http\Controllers\RoleConstant::USER}}"
                                            @if($user->role === \App\Http\Controllers\RoleConstant::USER)
                                            selected
                                                @endif
                                    >User
                                    </option>
                                    <option value="{{\App\Http\Controllers\RoleConstant::MEMBER}}"
                                            @if($user->role === \App\Http\Controllers\RoleConstant::MEMBER)
                                            selected
                                            @endif
                                    >Member
                                    </option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1">Phone</label>
                                        <input class="form-control py-4" value="{{$user->phone}}" type="text" name="phone"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1">Birthday</label>
                                        <input class="form-control py-4" type="date" value="{{$user->birthday}}" name="birthday"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Address</label>
                                <input class="form-control py-4" type="text" value="{{$user->address}}" name="address"/>
                            </div>
                            <div class="form-group">
                                <label class="small md-1">Avatar</label>
                                <input class="form-control-file" type="file" name="inputFile">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="{{route('users.index')}}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
