@extends('container')
@section('content')

        <accordion :items="{{ $questions }}"></accordion>

@endsection
