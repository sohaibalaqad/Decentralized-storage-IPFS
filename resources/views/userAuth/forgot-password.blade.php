@extends('layouts.auth')

@section('title')
    User Reset Password
@endsection

@section('content')
    <div class="brand-logo">
        <img src="{{ asset('assets/admin/images/logo.svg') }}" alt="logo">
    </div>
    <h6 class="font-weight-light">Enter your email address and we'll send you an email with instructions to reset your password. </h6>
    <form class="pt-3">
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="mt-3">
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Reset Password</button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            Back to login? <a href="{{ route('login') }}" class="text-primary">Login</a>
        </div>
    </form>
@endsection
