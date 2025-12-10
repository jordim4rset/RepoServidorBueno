@extends('layout.layout')



@section('title', 'Index')

@section('content')
    <h1>INDEX ANIMES</h1>

    @forelse ($animes as $anime)
        <a href="{{route('animes.show', $anime)}}"><h3>Titulo:{{$anime->title}}</h3></a>
        <p>Año: {{$anime->release_year}}</p>
        <p>Puntuació: {{$anime->rating}}</p>
        <p>Manga: {{$anime->has_manga}}</p>
    @empty
        <p>No hay animes</p>
    @endforelse

@endsection

