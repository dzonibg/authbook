@extends("layout.main")
@section("body")

<p>Comments</p>
    @foreach($comments as $comment)
    @component("components.card")
    @slot("heading")
        {{$comment->user->name}} --
        {{$comment->created_at}}
        <form class="form-check-inline" action="/comment/{{$comment->id}}" method="POST">
            @method("DELETE")
            @csrf
            <button type="submit" class="btn-danger">X</button>
        </form>
        <a href="/comment/{{$comment->id}}/edit">Edit</a>
    @endslot
    @slot("slot")
    {{$comment->text}}
    @endslot
    @endcomponent
        <br>
    @endforeach

@guest
    <p>To comment, you need to be signed in.</p>
    @endguest
@auth
    <div class="col-md-12" align="center">
        <form class="form-horizontal" role="form" action="/comment" method="POST">
            @csrf
            <div class="form-group">
                <div class="col-sm-2">
                    <label for="text" class="control-label">Add new comment</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="text" name="text" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2 text-center">
                    <button type="submit" class="btn btn-secondary">Add comment</button>
                </div>
            </div>
        </form>
    </div>
    @endauth
@endsection
