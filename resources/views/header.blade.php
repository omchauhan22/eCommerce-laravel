<?php 
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}
?>

<nav class="navbar navbar-expand-lg bg-dark text-light">
  <div class="container-fluid">
      <a class="navbar-brand text-light" href="/">E-Comm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link text-light" href="/myorders">Orders</a>
              </li>
          </ul>
          <form action="/search" class="d-flex" role="search">
              <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
          <ul class="navbar-nav ms-3 column-gap">
            <li class="nav-item position-relative">
              <a class="nav-link text-light" href="/cartlist">
                  Cart
                  <span class="badge bg-warning text-dark">{{ $total }}</span>
              </a>
            </li>          
              @if(Session::has('user'))
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ Session::get('user')['name'] }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item text-light" href="/logout">Logout</a></li>
                  </ul>
              </li>
              @else
              <li class="nav-item">
                  <a class="nav-link text-light" href="/login">Login</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/register">Register</a> 
              </li>
              @endif
          </ul>
      </div>
  </div>
</nav>



