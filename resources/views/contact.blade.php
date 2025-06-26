@extends('layout')

@section('content')
<h2>Contact Me</h2>
<form action="#" method="POST">
    <label>Name:</label><br />
    <input type="text" name="name" /><br /><br />

    <label>Email:</label><br />
    <input type="email" name="email" /><br /><br />

    <label>Message:</label><br />
    <textarea name="message"></textarea><br /><br />

    <button type="submit" class="btn">Send</button>
</form>
@endsection
