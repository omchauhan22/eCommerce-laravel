@extends('master')
@section("content")
<div class="custom-product py-5">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="text-center mb-4">Your Shopping Cart</h1>
        <div class="trending-wrapper">
            @if($products->isEmpty())
                <div class="alert alert-info text-center">
                    Your cart is currently empty.
                </div>
            @else
                @foreach($products as $item)
                <div class="row searched-item cart-list-divider border rounded p-3 mb-3">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="img-fluid rounded" src="{{$item->gallery}}" alt="{{$item->name}}">
                        </a>
                    </div>
                    <div class="col-sm-5">
                        <div>
                            <h2 class="h4">{{$item->name}}</h2>
                            <h5 class="text-muted">{{$item->description}}</h5>
                        </div>
                    </div>
                    <div class="col-sm-4 d-flex align-items-center">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger me-2" onclick="return confirm('Are you sure you want to remove this item from the cart?');">Remove</a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <div class="text-center mt-4">
            <a class="btn btn-primary" href="ordernow">Proceed to Checkout</a>
        </div>
    </div>
</div>
@endsection
