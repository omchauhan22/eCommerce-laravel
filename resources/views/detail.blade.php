@extends('master')
@section("content")
<div class="container mt-5">
   <div class="row">
       <div class="col-md-6">
           <img class="detail-img img-fluid rounded shadow" src="{{$product['gallery']}}" alt="{{$product['name']}}">
       </div>
       <div class="col-md-6">
           <a href="/" class="btn btn-outline-secondary mb-3">Go Back</a>
           <h2 class="text-primary">{{$product['name']}}</h2>
           <h3 class="text-success">Price: ${{$product['price']}}</h3>
           <h4 class="text-muted">Details: {{$product['description']}}</h4>
           <h5 class="text-info">Category: {{$product['category']}}</h5>
           <br>
           <form action="/add_to_cart" method="POST" class="mb-3">
               @csrf
               <input type="hidden" name="product_id" value="{{$product['id']}}">
               <button class="btn btn-primary">Add to Cart</button>
           </form>
           <button class="btn btn-success">Buy Now</button>
       </div>
   </div>
</div>

@endsection
