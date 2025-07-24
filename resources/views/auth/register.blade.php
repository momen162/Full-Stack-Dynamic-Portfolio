@extends('layout')

@section('content')
<div class="register-container">
    <h2>Register</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('register') }}" class="register-form">
        @csrf

        <div class="form-group">
            <label for="name">Name <span class="required">*</span></label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="email">Email <span class="required">*</span></label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password <span class="required">*</span></label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password <span class="required">*</span></label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn">Register</button>
    </form>
</div>
@endsection
