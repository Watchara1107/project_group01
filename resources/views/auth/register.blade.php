@extends('layouts.master_authen')
@section('content')
    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
        @csrf
        <span class="login100-form-title">
            Create Account
        </span>

        <div class="wrap-input100 validate-input" data-validate="Input your name">
            <input class="input100" type="text" name="name" placeholder="Name">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
            <input class="input100" type="email" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Confirm your password">
            <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn">
                Register
            </button>
        </div>

        <div class="text-center p-t-136">
            <a class="txt2" href="{{ route('login') }}">
                Have an Account
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
        </div>
    </form>
@endsection
