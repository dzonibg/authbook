@extends("layout.main")
@section("body")
@component("components.card")
    @slot("heading")A test card @endslot
    @slot("slot")
        <p>This is a test of a card body.</p>
        @endslot
    @endcomponent
@endsection
