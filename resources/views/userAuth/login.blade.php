@extends('layouts.auth')

@section('title')
    User Login
@endsection

@section('content')
      <div class="brand-logo">
        <img src="{{ asset('assets/admin/images/logo.svg') }}" alt="logo">
      </div>
      <h4>Hello! let's get started</h4>
      <h6 class="font-weight-light">Sign in to continue.</h6>
      <form class="pt-3" method="POST" action="{{ route('login') }}">
          @csrf
        <div class="form-group">
          <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="mt-3">
          <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">SIGN IN</a>
        </div>
        <div class="my-2 d-flex justify-content-between align-items-center">
          <div class="form-check">
            <label class="form-check-label text-muted">
              <input type="checkbox" class="form-check-input">
              Keep me signed in
            </label>
          </div>
          <a href="#" class="auth-link text-black">Forgot password?</a>
        </div>
        <div class="mb-2">
          <button type="button" class="btn btn-block btn-facebook auth-form-btn">
            <i class="ti-facebook mr-2"></i>Connect using facebook
          </button>
        </div>
        <div class="text-center mt-4 font-weight-light">
          Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
        </div>
      </form>
@endsection
