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
    @endsection
