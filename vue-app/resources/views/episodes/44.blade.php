@extends('layout')

@push('style')
    <style xmlns:v-tooltip="http://www.w3.org/1999/xhtml" xmlns:v-tooltip="http://www.w3.org/1999/xhtml"
           xmlns:v-tooltip="http://www.w3.org/1999/xhtml" xmlns:v-tooltip="http://www.w3.org/1999/xhtml">
        html, body {height: 100vh;}

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tooltip{
            background: rgba(0, 0, 0, .7);
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
@endpush

@section('section')
    <div id="app">
        <h3>Option #1</h3>

        <p>
            Hello there, <span data-tooltip="I am a tooltip!">hover over me</span>
        </p>

        <hr/>

        <h3>Option #2</h3>

        <p>
            Hello there, <span v-tooltip:top="'Here is another to make a tooltip!'">hover over me</span>
        </p>

        <hr/>

        <h3>Option #3</h3>

        <p>
            Hello there, <span data-tooltip-name="our-products-tooltip">learn about products</span>
        </p>

        <tooltip name="our-products-tooltip">
            <h1>Our Products</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </tooltip>
    </div>
@endsection
