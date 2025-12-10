@extends('layout.layout')

@section('title', 'CREAR ESPACIO')

@section('content')
    <form action="{{route('spaces.store')}}" method="POST">
        @csrf
        <h3>CREAR EDIFICIO</h3>
        <br>
        <label for="building">EDIFICIO:</label>
        <input type="text" name="building" id="building">
        <br>
        <label for="floor">PISO:</label>
        <input type="text" name="floor" id="floor">
        <br>
        <label for="code">CODIGO DE ENTRADA:</label>
        <input type="text" name="code" id="code">
        <br>
        <input type="submit" value="ENVIAR">
    </form>
@endsection
