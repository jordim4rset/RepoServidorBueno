@extends('layout.layout')



@section('title', 'Index')

@section('content')
    <h1>Bienvenido a FluxVid</h1>
    <img src="/img/GOT.jpg" alt="GOT">
    <a href="{{route('actors.show', 123)}}">Ver actor con id 123</a>
@endsection




















