@extends('master')
@section("content")
<div class="custom-product">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach ($products as $item)
            <div class="swiper-slide">
                <a href="detail/{{$item['id']}}">
                    <img class="slider-img" src="{{$item['gallery']}}" alt="{{$item['name']}}" style="width: 100%; height: auto;">
                    <div class="slider-text">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

<div class="trending-wrapper" style="text-align: center; margin-top: 20px;">
  <h3>Trending Products</h3>
  <div class="trending-grid" style="display: flex; flex-wrap: wrap; justify-content: center;">
      @foreach($products as $item)
          <div class="card" style="width: 18rem; margin: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); border-radius: 10px; overflow: hidden;">
              <a href="detail/{{$item['id']}}">
                  <img src="{{$item['gallery']}}" class="card-img-top" alt="{{$item['name']}}" style="width: 100%; height: 200px; object-fit: cover;">
              </a>
              <div class="card-body" style="display: flex; flex-direction: column; align-items: center;">
                  <h5 class="card-title">{{$item['name']}}</h5>
                  <p class="card-text" style="text-align: center;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <div style="display: flex; justify-content: space-between; width: 100%;">
                      <a href="detail/{{$item['id']}}" class="btn btn-primary">View Details</a>
                      <form action="/add_to_cart" method="POST" style="margin-left: 10px;">
                          @csrf
                          <input type="hidden" name="product_id" value="{{$item['id']}}">
                          <button type="submit" class="btn btn-primary" style="background-color: #28a745; color: white;">Add to Cart</button>
                      </form>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</div>

  
</div>
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>
@endsection
