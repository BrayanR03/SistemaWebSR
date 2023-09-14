<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <meta name="author" content="AcademyView">
    <meta name="description" content="Esta es una página web de visualizacion academica">  
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Michroma&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    
    <nav>
        <div class="title-logo">
            <img src="{{asset('assets/Black White Modern Luxury Logo.png')}}" alt="logo">
            <h1>AcademyView</h1>
        </div>

        <table >
            <tr><a href="/">INICIO</a></tr>
            <tr><a href="{{route('apoderado.index')}}">PERFIL APODERADO</a></tr>
            <tr><a href="{{route('alumno.index')}}">PERFIL ESTUDIANTE</a></tr>
            <tr><a href="{{route('horario')}}">HORARIO 2023</a></tr>
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{-- {{ __('Logout') }} --}}
                                        <img class="btn-logout" src="{{asset('assets/logout.png')}}" alt="">
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </table>
    </nav>
</body>
</html>