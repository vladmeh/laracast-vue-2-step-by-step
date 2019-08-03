@extends('welcome')
@section('content')
    <accordion
        v-for="n in 5"
        title="Lorem ipsum dolor sit amet"
        body="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloribus hic neque nihil perferendis quaerat quidem ratione recusandae repellat vitae. Incidunt porro recusandae suscipit ullam vel. Fugit inventore reiciendis ut?"
    ></accordion>
@endsection
