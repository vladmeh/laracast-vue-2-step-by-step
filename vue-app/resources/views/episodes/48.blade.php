@extends('container')

@section('content')
    <div style="margin-bottom: 150vh;">
        <button class="button is-success" id="reply">Reply</button>
    </div>
    <div class="navbar is-fixed-bottom">
        <div class="navbar-end">
            <conditional-element when-hidden="#reply">
                <button class="button is-primary">Reply</button>
            </conditional-element>
        </div>
    </div>
@endsection
