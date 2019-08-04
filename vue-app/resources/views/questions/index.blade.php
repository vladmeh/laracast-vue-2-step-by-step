@extends('welcome')
@section('content')

        <accordion :items="{{ $questions }}"></accordion>

@endsection
