@extends("layout.main")
@section("body")
@component("components.card")
    @slot("heading") Welcome! @endslot
    <p>Welcome to the main page. This is a guestbook with authentication.</p>
    @auth
        <p>We can see you are logged in {{ Auth::user()->name }}. Welcome. You have full access.</p>
    @endauth
    @guest
        <p>You are not logged in. Please <a href="/login">log in</a> or <a href="/register">register</a> in order to comment.</p>
    @endauth
@endcomponent
    @endsection
