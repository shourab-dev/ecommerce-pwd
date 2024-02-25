@extends('layouts.authLayouts')

@section('authLayout')

<div class="axil-signin-form">
    <h3 class="title">Sign in to eTrade.</h3>
    <p class="b2 mb--55">Enter your detail below</p>
    <form class="singin-form" method="POST" action="{{ request()->routeIs('admin.login') ? route('admin.auth')  : route('login') }}">
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="example@mail.com">
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" name="password" placeholder="*********">
            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
            <button type="submit" class="axil-btn btn-bg-primary submit-btn">Sign In</button>
            <a href="{{ route('password.request') }}" class="forgot-btn">Forget password?</a>
        </div>
    </form>
</div>

@endsection