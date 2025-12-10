@extends('layout.layout');

@section('content')
    <h1>CREACIÓN DE ACTORES</h1>

    <form action="{{route('actors.store')}}" method="post">
        @csrf
        <label for="name">NOMBRE:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="nationality">NACIONALIDAD:</label>
        <input type="text" name="nationality" id="nationality">
        <br>
        <label for="year">AÑO NACIMIENTO:</label>
        <input type="text" name="year" id="year">

        <button type="submit">ENVIAR</button>
    </form>

    @if ($errors->any())
        Hay errores en el formulario: <br>
        @foreach ($errors->all() as $error)
            {{$error}} <br>
        @endforeach
    @endif

@endsection;

