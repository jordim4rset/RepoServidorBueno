<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <nav>
        <a href="{{route('index')}}">PRINCIPAL</a>
        <a href="{{route('subject.index')}}">VER ASIGNATURAS</a>
        <a href="{{route('subject.show','33')}}">VER ASIGNATURA 33</a>
        <a href="{{route('subject.create')}}">AÑADIR ASIGNATURA</a>
    </nav>

    @yield('content')

    <footer>
        <a href="{{route('cookies')}}">POLITICA DE COOKIES</a>
        <a href="{{route('privacy')}}">PRIVACIDAD</a>
    </footer>
</body>
</html>
