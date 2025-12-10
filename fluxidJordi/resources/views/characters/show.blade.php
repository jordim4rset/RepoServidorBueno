@extends('layout.layout')



@section('title', 'Index')

@section('content')
    <h1>SHOW CHARACTER</h1>

    <h3>Nombre: {{$character->name}}</h3>
    <p>Años: {{$character->age ?? 'Desconocido'}}</p>
    <p>Genero: {{$character->gender}}</p>
    <p>Rol: {{$character->role}}</p>
    <p>Descripción: {{$character->description}}</p>


    <a href="{{route('character.index', $character)}}"><button>VOLVER ATRAS</button></a>

    @forelse ($character->animes as $anime)
        <p>{{$anime->title}}</p>
    @empty
        No sale en ningun anime
    @endforelse

@endsection
