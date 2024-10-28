<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
.navbar {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}
.navbar .column-gap{
    column-gap: 25px;
}
.navbar-brand {
    font-weight: bold;
    font-size: 1.5rem;
}

.nav-link {
    transition: color 0.3s;
}

.nav-link:hover {
    color: #ffc107; /* Bootstrap warning color */
}

.nav-item .dropdown-menu {
    background-color: #343a40; /* Dark background */
}

.nav-item .dropdown-menu .dropdown-item:hover {
    background-color: #495057; /* Darker background on hover */
}

.form-control {
    border-radius: 20px;
}

.btn-outline-light {
    border-radius: 20px;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-outline-light:hover {
    background-color: rgba(255, 255, 255, 0.1);
    border-color: #ffc107;
}

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
    }

    .swiper-slide img {
      display: block;
      width: auto;
    }
    img.slider-img {
        height: 600px !important;
    }
    .custom-product {
        height: 600px;
    }
    .slider-text {
        background-color: rgb(0 0 0 / 55%) !important; /* Updated for better readability */
        padding: 15px; /* Added padding for text */
    }
    .trending-wrapper {
    padding: 20px;
}

.trending-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Space between items */
}

.trending-item {
    flex: 1 1 calc(25% - 20px); /* Adjusts the item width */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
    text-align: center;
}

.trending-image {
    width: 100%;
    height: auto;
}

@media (max-width: 768px) {
    .trending-item {
        flex: 1 1 calc(50% - 20px); /* Adjust for smaller screens */
    }
}

@media (max-width: 480px) {
    .trending-item {
        flex: 1 1 100%; /* Stack items on very small screens */
    }
}

    .detail-img {
        height: 200px;
    }
    .search-box {
        width: 500px !important;
    }
    .cart-list-devider {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.register-body{
  min-height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
.custom-product {
    padding: 20px;
    background-color: #f8f9fa;
}

.trending-wrapper {
    margin-top: 20px;
}

h4 {
    color: #343a40;
}

.border {
    border: 1px solid #dee2e6;
}

.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}
.position-relative {
    position: relative;
}

.badge {
    position: absolute;
    top: -5px;
    right: -10px;
    background-color: #f5f6f8;
    border-radius: 100%;
    padding: 0 5px;
    font-size: 17px;
    color: black;
}
.custom-product {
    background-color: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.table th, .table td {
    text-align: center;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}
.detail-img {
    max-height: 400px; /* Limit image height */
    object-fit: cover; /* Maintain aspect ratio */
}
.container {
    background-color: #f8f9fa; /* Light background for contrast */
    border-radius: 10px; /* Rounded corners */
    padding: 20px; /* Spacing around the container */
    box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Subtle shadow */
}

</style>
</html>