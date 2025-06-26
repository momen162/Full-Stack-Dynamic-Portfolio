@extends('layout')

@section('content')
<div class="home-container">
    <div class="home">
        <h2>Hi there,</h2>
        <h1>I’m <strong>Momen Ahmed</strong></h1>
        <p>Full Stack Developer</p>

        <a href="{{ url('/about') }}" class="btn">About Me</a>

        <div class="social-icons">
            <a href="#"><img src="{{ asset('assets/icons/linkedin.png') }}" alt="LinkedIn" /></a>
            <a href="#"><img src="{{ asset('assets/icons/github.png') }}" alt="GitHub" /></a>
            <a href="#"><img src="{{ asset('assets/icons/facebook.png') }}" alt="Facebook" /></a>
            <a href="#"><img src="{{ asset('assets/icons/gmail.png') }}" alt="Gmail" /></a>
        </div>
    </div>

    <div class="profile-pic">
        <img src="{{ asset('assets/images/profile.png') }}" alt="Momen Ahmed" />
    </div>
</div>
@endsection
