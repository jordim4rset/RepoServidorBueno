@extends('layout.layout')

@section('title', 'STORE')

@section('content')

    <h3>Se ha guardado correctamente el actor {{$actor['name']}}</h3>

    @foreach ($actor as $key => $value)
        <h3>{{$key}} : {{$value}}</h3>
    @endforeach



@endsection
