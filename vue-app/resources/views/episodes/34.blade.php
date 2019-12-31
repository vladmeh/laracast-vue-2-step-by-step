@extends('container')

@section('content')
    <carousel :autoplay="true">
        <img src="{{ asset('images/image_2.png') }}">
        <img src="{{ asset('images/image_3.png') }}">
        <img src="{{ asset('images/image_4.png') }}">
        <img src="{{ asset('images/image_5.png') }}">
        <img src="{{ asset('images/image_7.png') }}">
    </carousel>
@endsection
