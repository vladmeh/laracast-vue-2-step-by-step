@extends('welcome');


@section('test')
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
