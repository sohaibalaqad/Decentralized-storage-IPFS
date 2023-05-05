@extends('layouts.auth')

@section('title')
    Admin Login
@endsection

@section('content')
    <div class="brand-logo" style="text-align: center">
        <img src="{{ asset('assets/admin/images/logo.svg') }}" alt="logo">
    </div>
    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="mt-3">
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    Keep me signed in
                </label>
            </div>
            <a href="#" class="auth-link text-black">Forgot password?</a>
        </div>
    </form>
@endsection
