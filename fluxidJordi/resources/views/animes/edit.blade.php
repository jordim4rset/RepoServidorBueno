@extends('layout.layout')



@section('title', 'ANIME EDIT')

@section('content')
    <h1>EDICIÓN DE ANIMES</h1>

    <form action="{{route('animes.update', $anime)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">TITULO:</label>
        <input type="text" name="title" id="title" value="{{$anime->title}}">
        <br>
        <label for="year">AÑO:</label>
        <input type="text" name="year" id="year" value="{{$anime->release_year}}">
        <br>
        <label for="episodes">EPISODIOS:</label>
        <input type="text" name="episodes" id="episodes" value="{{$anime->episodes}}">
        <br>
        <label for="rating">RATING:</label>
        <input type="text" name="rating" id="rating" value="{{$anime->rating}}">
        <br>
        <label for="hasManga">TIENE MANGA</label>
        @if ($anime->has_manga == 1)
            <input type="checkbox" name="hasManga" id="hasManga" checked>
        @else
            <input type="checkbox" name="hasManga" id="hasManga">
        @endif
        <label for="studio">ESTUDIO:</label>
        <select name="studio" id="studio">
            <option value=""></option>
        </select>
        <br>
        <input type="file" name="image" id="image">

        <button type="submit">GUARDAR</button>
    </form>
@endsection

