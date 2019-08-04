@extends('layout');


@section('section')

<div id="app" class="container"></div>

<div id="one" class="container">
    <h1>
        @{{ shared.user.name }}
    </h1>
</div>

<div id="two" class="container">
    <h1>
        @{{ shared.user.name }}
    </h1>
</div>
@endsection
