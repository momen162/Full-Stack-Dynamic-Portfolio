@extends('layout')

@section('content')
<div class="work-experience">
    <h2>Work Experience</h2>
    <ul>
        <li>
            <h3>Full Stack Developer</h3>
            <span class="company">XYZ Company</span>
            <span class="duration">2022 – Present</span>
            <p>Contributed to developing scalable web applications and collaborated with cross-functional teams to deliver projects on time.</p>
        </li>
        <li>
            <h3>Web Developer Intern</h3>
            <span class="company">ABC Tech</span>
            <span class="duration">2021 – 2022</span>
            <p>Assisted in front-end development and participated in code reviews to improve code quality.</p>
        </li>
    </ul>

    <footer class="footer">
    <p>&copy; {{ date('Y') }} Momen Ahmed. All rights reserved.</p>
    <p>
      <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox">momenahmed079@gamil.com</a> |
      <a href="https://github.com/momen162" target="_blank" rel="noopener">GitHub</a> |
      <a href="https://linkedin.com/in/momen" target="_blank" rel="noopener">LinkedIn</a>
    </p>
</footer>
</div>
@endsection
