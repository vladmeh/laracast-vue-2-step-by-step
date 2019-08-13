@extends('container')
@section('content')
    <div class="columns" style="padding-top: 150vh; padding-bottom: 150vh;">
        <div class="column">
            <count :to="11"></count>
        </div>
        <div class="column">
            <count :to="9000"></count>
        </div>
        <div class="column">
            <count :to="1955"></count>
        </div>
    </div>
@endsection
