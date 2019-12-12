@extends("layout.main")
@section("body")

<p>Comments</p>
    @foreach($comments as $comment)
    @component("components.card")
    @slot("heading") {{$comment->user->name}} @endslot
    @slot("slot")
    {{$comment->text}}
    @endslot
    @endcomponent
    @endforeach

@guest
    <p>To comment, you need to be signed in.</p>
    @endguest
@auth
    <div class="form-control">
    <form action="/comment" method="POST">
        @csrf
        <input  id="text" placeholder="Comment text" name="text">
        <button type="submit" class="btn-primary">Submit</button>
    </form>
    </div>
    @endauth
@endsection
