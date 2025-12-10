@extends('layout.layout')



@section('title', 'Index')

@section('content')
    <h1>SHOW ANIMES</h1>

        <h3>Titulo: {{$anime->title}}</h3>
        <img src="/storage/{{$anime->image}}" alt="Portada de: {{$anime->title}}">
        <p>Año: {{$anime->release_year}}</p>
        <p>Episodios: {{$anime->episodes}}</p>
        <p>Puntuació: {{$anime->rating}}</p>
        <p>Manga: {{$anime->has_manga}}</p>
        <p>Sinopsis: {{$anime->synopsis}}</p>
        <p>Etiquetas: {{$anime->tags}}</p>

        <a href="{{route('animes.index')}}"><button>VOLVER ATRAS</button></a>

        @forelse ($anime->characters as $character)
            <p>{{$character->name}}</p>
        @empty
            No tiene personajes
        @endforelse
@endsection

