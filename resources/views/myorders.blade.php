@extends('master')
@section("content")
<div class="custom-product">
    <div class="container">
        <div class="trending-wrapper">
            <h4 class="mb-4 text-center">My Orders</h4>
            @foreach($orders as $item)
            <div class="row mb-4 border rounded shadow-sm p-3 bg-light">
                <div class="col-md-3 text-center">
                    <a href="detail/{{$item->id}}">
                        <img class="img-fluid rounded" src="{{$item->gallery}}" alt="{{$item->name}}" style="max-height: 200px; object-fit: cover;">
                    </a>
                </div>
                <div class="col-md-6">
                    <h5 class="font-weight-bold">{{$item->name}}</h5>
                    <h6 class="text-muted">Delivery Status: <span class="text-primary">{{$item->status}}</span></h6>
                    <h6 class="text-muted">Address: {{$item->address}}</h6>
                    <h6 class="text-muted">Payment Status: <span class="text-success">{{$item->payment_status}}</span></h6>
                    <h6 class="text-muted">Payment Method: {{$item->payment_method}}</h6>
                </div>
                <div class="col-md-3 text-right">
                    <a href="detail/{{$item->id}}" class="btn btn-primary">View Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
