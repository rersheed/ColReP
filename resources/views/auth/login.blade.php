@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <h4>Welcome back!</h4>
    <h6 class="fw-light">Sign in to continue.</h6>
    <form class="pt-3" method="post" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email Address">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control form-control-lg" id="password"
                placeholder="Password">
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                IN</button>
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
        <div class="text-center mt-4 fw-light">
            Don't have an account? <a href="{{ url('/') }}" class="text-primary">Contact Admin</a>
        </div>
    </form>
@endsection
