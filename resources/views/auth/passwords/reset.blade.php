@extends('layouts.admin.master')
@section('text')
<form class="login100-form validate-form p-b-33 p-t-5 " method="POST" action="{{ route('password.update') }}"   >
    @csrf
        
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="wrap-input100 validate-input" data-validate = "Enter email">
        <input class="input100" type="text" name="email" value="{{ $email ?? old('email') }}" placeholder="email">
        <span class="focus-input100" data-placeholder="&#xf2da;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password">
        <input class="input100" type="password" name="password" placeholder="Password">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password_confirmation">
        <input class="input100" type="password" name="password_confirmation" placeholder="password_confirmation">
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>
    
    <div class="container-login100-form-btn m-t-32">
        <button class="login100-form-btn">
            Reset Password
        </button>
    </div>

    
    
    </form>
@endsection

