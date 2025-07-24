@extends('layout')

@section('content')
<div class="login-container">
    <h2>Login</h2>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <div class="form-group">
            <label for="email">Email <span class="required">*</span></label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password <span class="required">*</span></label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group remember">
            <label><input type="checkbox" name="remember"> Remember Me</label>
        </div>

        <button type="submit" class="btn">Login</button>
    </form>

    <div class="register-link">
        <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>
</div>
@endsection
