@extends('welcome')

@section('content')
{{--    <input type="text" v-model="coupon">--}}
{{--    <input type="text" :value="coupon" @input="coupon = $event.target.value">--}}

    <coupon v-model="coupon"></coupon>
@endsection