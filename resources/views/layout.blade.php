<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Portfolio | Momen Ahmed</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
    <header>
        <div class="logo">Momen</div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/skills') }}">Skills</a></li>
                <li><a href="{{ url('/education') }}">Education</a></li>
                <li><a href="{{ url('/work') }}">Work</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main style="padding: 40px;">
        @yield('content')
    </main>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
