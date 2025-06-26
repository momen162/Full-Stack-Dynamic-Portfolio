@extends('layout')

@section('content')
<div class="education-section">
    <h2>Education</h2>

    <div class="education-list">
        <div class="education-item">
            <h3>BSc in Computer Science</h3>
            <p>Daffodil International University</p>
            <span class="edu-year">2021</span>
        </div>
        <div class="education-item">
            <h3>HSC</h3>
            <p>Dhaka Imperial College</p>
            <span class="edu-year">2017</span>
        </div>
        <div class="education-item">
            <h3>SSC</h3>
            <p>Shyamgram M.K High School</p>
            <span class="edu-year">2015</span>
        </div>
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
