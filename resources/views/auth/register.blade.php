@extends('layouts.authLayouts')

@section('authLayout')

    <div class="axil-signin-form">
        <h3 class="title">I'm New Here</h3>
        <p class="b2 mb--55">Enter your detail below</p>
        <form class="singin-form" method="POST" action="{{ route('register') }}" >
            @csrf
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" name="name" placeholder="Username">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="annie@example.com">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="*********">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="axil-btn btn-bg-primary submit-btn">Create Account</button>
            </div>
        </form>
    </div>

@endsection