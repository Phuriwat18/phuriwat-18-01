@extends('layouts.admin.master')
@section('text')
<form class="login100-form validate-form p-b-33 p-t-5 " method="POST" action="{{ route('login') }}">
    @csrf
    
        <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="username" placeholder="User name">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
        </div>
    
        <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
        </div>
    
        <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn">
                Login
            </button>
        </div>
        <div class="text-center p-t-10">
            <a class="login50-form-btn" href="{{ url('/') }}">
                go to home
            </a>
        </div>
        <div class="text-center p-t-10">
            <a class="login50-form-btn" href="{{ route('register') }}">
                go to register
            </a>
        </div>
        <div class="text-center p-t-10">
            <a class="login50-form-btn" href="{{ route('password.request') }}">
                Forgot Password?
            </a>
        </div>
    
    </form>
@endsection

