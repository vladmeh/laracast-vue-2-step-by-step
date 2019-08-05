@extends('layout')

@push('style')
    <style>
        body {
            padding-top: 40px;
        }
    </style>
@endpush

@section('section')
    <div id="app" class="container">
        @yield('content')
    </div>
@endsection
