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
                        <p style="color: red">{{session('create-error')}}</p>
                        <form method="post" action="{{route('users.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1">Name</label>

                                <input type="text" required minlength="3" class="form-control py-4
                                @if($errors->first('name'))
                                    is-invalid
                                @endif
                                    " value="{{ old('name') }}" name="name" placeholder="Enter name">
                                @if($errors->first('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input required class="form-control py-4
                                @if($errors->first('email'))
                                    is-invalid
                                @endif
                                    " name="email" id="inputEmailAddress" type="email" value="{{ old('email') }}"
                                       aria-describedby="emailHelp" placeholder="Enter email address"/>
                                @if($errors->first('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="small mb-1">Role</label>
                                <select name="role" class="form-control
                                @if($errors->first('role'))
                                    is-invalid
                                @endif
                                    ">
                                    <option value="{{\App\Http\Controllers\RoleConstant::ADMIN}}">Admin</option>
                                    <option value="{{\App\Http\Controllers\RoleConstant::USER}}">User</option>
                                </select>
                                @if($errors->first('role'))
                                    <p class="text-danger">{{ $errors->first('role') }}</p>
                                @endif
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input required minlength="6" maxlength="32" class="form-control py-4
                                        @if($errors->first('password'))
                                            is-invalid
                                        @endif
                                            " name="password" id="inputPassword"
                                               type="password" placeholder="Enter password"/>
                                        @if($errors->first('password'))
                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                        <input required minlength="6" maxlength="32" class="form-control py-4
                                        @if($errors->first('confirm'))
                                            is-invalid
                                        @endif
                                            " name="confirm"
                                               id="inputConfirmPassword" type="password"
                                               placeholder="Confirm password"/>
                                        @if($errors->first('confirm'))
                                            <p class="text-danger">{{ $errors->first('confirm') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h3>More information</h3>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1">Phone</label>
                                        <input class="form-control py-4" type="text" name="phone"/>
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
                                <input class="form-control py-4" type="text" name="address"/>
                            </div>
                            <div class="form-group">
                                <label class="small md-1">Avatar</label>
                                <input class="form-control-file" type="file" name="inputFile">
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
