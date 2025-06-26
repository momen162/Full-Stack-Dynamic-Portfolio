@extends('layout')

@section('content')
<div class="about-container">
    <h2 id="about">About</h2>

    <div class="about-content">
        <div class="about-photo">
            <img src="{{ asset('assets/images/profile.png') }}" alt="Momen Ahmed" />
        </div>
        <div class="about-text">
            <p>Hello! I am Momen Ahmed, a passionate full stack developer with experience in Laravel, Vue.js, and other modern technologies.</p>
            <p>I enjoy building clean and scalable applications and continuously learning new technologies.</p>
            <a href="{{ asset('assets/files/Momen_Ahmed_CV.pdf') }}" class="btn" download>Download CV</a>
        </div>
    </div>
</div>
@endsection
