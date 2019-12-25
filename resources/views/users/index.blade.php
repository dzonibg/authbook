@extends("layout.main")
@section("body")
@foreach($users as $user)
    @component("components.card")
    @slot("heading") User: {{$user->name}} ID: {{$user->id}}
    @endslot
    @slot("slot")
    {{$user->email}}
    <p>Latest comment: {{$user->comment->last()->text ?? 'No comments. :('}} </p>
    <p>Total comments: {{$user->comment->count()}}</p>
    @endslot
    @endcomponent
    <br>
    @endforeach


    @endsection
