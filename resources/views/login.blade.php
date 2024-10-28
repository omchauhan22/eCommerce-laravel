@extends('master')
@section("content")
<div class="register-body">
    <div class="wrapper">
        <h2>Login</h2>
        <form action="login" method="POST">
            @csrf
            <div class="input-box">
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>  
            <div class="input-box button">
                <input type="submit" value="Login">
            </div>
            <div class="text">
                <h3>Don't have account? <a href="/register">Register now</a></h3>
            </div>
        </form>
    </div>
    </div>
@endsection
