@extends('layouts.header')
@push('css')
    <link rel="stylesheet" href="my_style.css">
@endpush
@section('content')

            <p>Name: {{$info['name']}} </p>
            <p>Phone: {{$info['phone']}} </p>
            <p>Email: {{$info['email']}} </p>


@endsection


@section('sidebar')
    @parent
    <p>Name: {{$info['name']}} </p>
    <p>Phone: {{$info['phone']}} </p>
    <p>Email: {{$info['email']}} </p>

@endsection


{{--
@component('messages.msg')
    holy guacomoly?
    @slot('msg')
        dddd
        ddsa
        dadad
    @endslot
@endcomponent--}}
