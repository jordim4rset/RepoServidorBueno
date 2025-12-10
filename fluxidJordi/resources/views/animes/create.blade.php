@extends('layout.layout')



@section('title', 'ANIME CREATE')

@section('content')
    <h1>CREACIÓN DE ANIMES</h1>

    <form action="{{route('animes.store')}}" method="post">
        @csrf
        <label for="title">TITULO:</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="year">AÑO:</label>
        <input type="text" name="year" id="year">
        <br>
        <label for="episodes">EPISODIOS:</label>
        <input type="text" name="episodes" id="episodes">
        <br>
        <label for="rating">RATING:</label>
        <input type="text" name="rating" id="rating">
        <br>
        <label for="hasManga">TIENE MANGA</label>
        <input type="checkbox" name="hasManga" id="hasManga">
        <label for="studio">ESTUDIO:</label>
        <select name="studio" id="studio">
            <option value=""></option>
        </select>

        <button type="submit">GUARDAR</button>
    </form>
@endsection

