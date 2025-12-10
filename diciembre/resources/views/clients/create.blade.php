@extends('layout.layout')

@section('title', 'CREAR CLIENTE')

@section('content')
    <form action="{{route('clients.store')}}" method="POST">
        <h3>CREAR CLIENTE</h3>
        <br>
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni">
        <br>
        <label for="name">NOMBRE:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="firstSurname">APELLIDO 1:</label>
        <input type="text" name="firstSurname" id="firstSurname">
        <br>
        <label for="secondSurname">APELLIDO 2:</label>
        <input type="text" name="secondSurname" id="secondSurname">
        <br>
        <label for="email">CORREO:</label>
        <input type="text" name="email" id="email">
        <br>
        <input type="submit" value="ENVIAR">
    </form>
@endsection
