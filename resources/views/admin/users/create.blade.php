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
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                        <h2 class="mb-0">Users Add New</h2>
                    </div>
                    <div class="card-body">
                        {{session('create-error')}}
                        <form method="post" action="{{route('users.store')}}">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1">Name</label>
                                <input class="form-control py-4" name="name" type="text" placeholder="Enter name"/>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Role</label>
                                <select name="role" class="form-control">
                                    <option value="{{\App\Http\Controllers\RoleConstant::ADMIN}}">Admin</option>
                                    <option value="{{\App\Http\Controllers\RoleConstant::USER}}">User</option>
                                    <option value="{{\App\Http\Controllers\RoleConstant::MEMBER}}">Member</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                        <input class="form-control py-4" name="confirmPassword" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h3>More information</h3>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1">Phone</label>
                                        <input class="form-control py-4" value="" type="text" name="phone"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1">Birthday</label>
                                        <input class="form-control py-4" type="date" name="birthday"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Address</label>
                                <input class="form-control py-4" type="text" name="address" />
                            </div>
                            <div class="form-group">
                                <label class="small md-1">Avatar</label>
                                <input class="form-control py-4" type="file" name="image">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Create</button>
                                <a href="{{route('users.index')}}" class="btn btn-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
