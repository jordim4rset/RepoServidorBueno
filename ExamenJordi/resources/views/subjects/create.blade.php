@extends('layout.layout')

@section('title','SUBJECT CREATE')

@section('content')
    <form action="{{route('subject.store')}}" method="POST">
        @csrf
        <label for="name">NOMBRE:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="code">CODIGO:</label>
        <input type="code" name="code" id="code">
        <br>
        <label for="cicle">CICLO:</label>
        <input type="text" name="cicle" id="cicle">
        <br>
        <label for="curse">CURSO:</label>
        <input type="curse" name="curse" id="curse">

        <button type="submit">ENVIAR</button>
    </form>

    @if($errors->any())
        Hay errores en el formulario: <br>
        @foreach ($errors->all() as $error)
            {{$error}} <br>
        @endforeach
    @endif

@endsection
