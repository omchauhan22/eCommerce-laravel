@extends('master')
@section("content")
<div class="register-body">
<div class="wrapper">
    <h2>Registration</h2>
    <form action="register" method="POST">
        @csrf
        <div class="input-box">
            <input type="text" name="name" placeholder="Enter your name" required>
        </div>
        <div class="input-box">
            <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Create password" required>
        </div>  
        <div class="input-box button">
            <input type="submit" value="Register Now">
        </div>
        <div class="text">
            <h3>Already have an account? <a href="/login">Login now</a></h3>
        </div>
    </form>
</div>
</div>
@endsection
