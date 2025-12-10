@extends('layout.layout');

@section('content')
    <h3>Info actor {{$id}}</h3>
    <a href="{{route('actors.edit', $id)}}">Editar actor con el id {{$id}}</a>
@endsection
