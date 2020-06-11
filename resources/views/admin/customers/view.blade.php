<div class="modal fade" id="exampleModal{{$customer->id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container text-left">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <p>MKH:</p>
                        </div>
                        <div class="col-md-8">
                            <a>{{$customer->id}}</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <p>Name:</p>
                        </div>
                        <div class="col-md-8">
                            <p>{{$customer->name}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <p>Email:</p>
                        </div>
                        <div class="col-md-8">
                            <p>{{$customer->email}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <p>Phone:</p>
                        </div>
                        <div class="col-md-8">
                            <p>{{$customer->phone}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <p>Address:</p>
                        </div>
                        <div class="col-md-8">
                            <p>{{$customer->address}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary" href="{{route('customers.edit',['id'=>$customer->id])}}">Edit</a>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
    </div>
</div>
</div>
