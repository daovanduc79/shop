@extends('home-admin')
@section('object','pets')
@section('content')
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Pets</a></li>
                                <li class="breadcrumb-item active" aria-current="page">List</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="{{route('pets.create')}}" class="btn btn-sm btn-success">New</a>
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
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="status">Image</th>
                                <th scope="col" class="sort" data-sort="budget">Name</th>
                                <th scope="col" class="sort" data-sort="completion">Amount</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($pets as $key => $pet)
                                <tr>
                                    <th scope="row">
                                        {{++$key}}
                                    </th>
                                    <td class="budget">
<<<<<<< HEAD
                                        <img src="{{asset('storage/'.$pet->image)}}" height="85" width="65">
=======
                                        <img src="
                                    @if($pet->image)
                                        {{asset('storage/'.$pet->image)}}
                                        @else
                                        {{asset('img/default/pets.jpg')}}
                                        @endif" width="70px" height="70px">
>>>>>>> 442c4fa4575abdfa47545ed7979a27340e19317e
                                    </td>
                                    <td>
                                        {{$pet->name}}
                                    </td>
                                    <td>
                                        {{$pet->categories->count()}}
                                    </td>
                                    <td class="text-right">
                                        <a href="#" type="button" class="btn btn-outline-info btn-sm">View</a>
                                        <a href="{{route('pets.edit',['id'=>$pet->id])}}" type="button"
                                           class="btn btn-outline-primary btn-sm">Edit</a>
                                        <a onclick="return confirm('Are you delete?')"
                                           href="{{route('pets.delete',['id'=>$pet->id])}}" type="button"
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
                          {{ $pets->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
