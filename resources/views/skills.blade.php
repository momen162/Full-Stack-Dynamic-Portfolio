@extends('layout')

@section('content')
<div>
<div class="skills-section">
    <h2>My Skills</h2>
    <ul class="skills-list">
        <li>HTML, CSS, JavaScript</li>
        <li>PHP & Laravel</li>
        <li>Vue.js / React</li>
        <li>MySQL & Database Design</li>
        <li>Git & GitHub</li>
    </ul>

</div>

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
