@extends("layout.main")
@section("body")

    <p>Welcome to the main page. This is a guestbook with authentication.</p>
    @auth
        <p>We can see you are logged in {{ Auth::user()->name }}. Welcome. You have full access.</p>
    @endauth
    @guest
        <p>You are not logged in. Please log in or register in order to comment.</p>
    @endauth

    @endsection
