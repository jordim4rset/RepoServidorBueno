@extends('layout.layout')



@section('title', 'Index')

@section('content')
    <h1>INDEX CHARACTERS</h1>

    @forelse ($characters as $character)
        <a href="{{route('character.show', $character)}}"><h3>Nombre: {{$character->name}}</h3></a>
    @empty
        <p>No hay characters</p>
    @endforelse

@endsection
