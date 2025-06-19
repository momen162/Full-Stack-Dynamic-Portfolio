<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Momen Ahmed</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">Momen</div>
        <nav>
            <ul>
                <li><a href="#" id="Home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="intro">
            <h2>Hi there,</h2>
            <h1 id = "userName">I'm Momen Ahmed</h1>
            <h3>Full Stack Developer</h3>
            <a href="#about" class="btn" id="change">About Me</a>
            
        </div>

        <div class="profile-pic">
            <img src="{{ asset('assets/images/profile.png') }}" alt="Momen Ahmed">
        </div>
        
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h2>About</h2>
        <div class="about-content">
           
            <div class="details">
                <p>Hello! I'm a passionate full-stack developer with experience in web and application development...</p>
                <a href="{{ asset('assets/docs/Momen_CV.pdf') }}" class="btn" download>Download CV</a>
            </div>
        </div>
    </section>

    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
