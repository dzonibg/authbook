@extends("layout.main")
@section("body")

    @component("components.card")
    @slot("heading")Edit comment @endslot
    @slot("slot")

        <p>Editing the comment - {{$comment->created_at}} by {{$comment->user->name}}</p>
        <form action="/comment/{{$comment->id}}" method="POST">
            @method("PATCH")
            @csrf
            <input type="text" name="text" class="form-control" value="{{$comment->text}}">
            <br>
            <button type="submit" class="btn-dark">Edit comment</button>

        </form>

    @endslot
    @endcomponent


    @endsection
