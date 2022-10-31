@extends('layouts.admin.master')
@section('text')
<form class="login100-form validate-form p-b-33 p-t-5 " method="POST" action="{{ route('password.email') }}">
    @csrf

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
        <div class="wrap-input100 validate-input" data-validate = "Enter email">
            <input class="input100" type="text" name="email" placeholder="email">
            <span class="focus-input100" data-placeholder="&#xf2da;"></span>
        </div>

        <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn">
                Send Password Reset Link
            </button>
        </div>
        
    
    </form>
@endsection

