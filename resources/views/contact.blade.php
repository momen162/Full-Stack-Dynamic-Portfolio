@extends('layout')

@section('content')
<div class="contact-container">
    <h2>Contact Me</h2>
    <form action="#" method="POST" class="contact-form" novalidate>
        @csrf

        <div class="form-group">
            <label for="name">Name<span class="required">*</span></label>
            <input type="text" id="name" name="name" required placeholder="Your full name" />
        </div>

        <div class="form-group">
            <label for="email">Email<span class="required">*</span></label>
            <input type="email" id="email" name="email" required placeholder="your.email@example.com" />
        </div>

        <div class="form-group">
            <label for="message">Message<span class="required">*</span></label>
            <textarea id="message" name="message" rows="6" required placeholder="Write your message here..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>

<footer class="footer">
    <p>&copy; {{ date('Y') }} Momen Ahmed. All rights reserved.</p>
    <p>
      <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox">momenahmed079@gamil.com</a> |
      <a href="https://github.com/momen162" target="_blank" rel="noopener">GitHub</a> |
      <a href="https://linkedin.com/in/momen" target="_blank" rel="noopener">LinkedIn</a>
    </p>
</footer>
@endsection
