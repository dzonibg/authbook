@extends("layout.main")
@section("body")
<p>This is the main page.</p>
@auth
    <p>Welcome {{Auth::user()->name}}</p>
    @else
    <p>Hello. Please log in or register to comment on this Authbook.</p>
    @endauth
    @endsection
