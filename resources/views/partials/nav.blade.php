<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <meta name="author" content="AcademyView">
    <meta name="description" content="Esta es una página web de visualizacion academica">  
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Michroma&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        /* Archivo: public/css/styles.css */

/* Estilos generales */
body {
    font-family: 'Julius Sans One', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #F0F0F0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #580343;
    color: rgb(251, 251, 251);
}

.title-logo img {
    height: 50px; /* Ajusta según sea necesario */
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-size: 16px;
}

nav a:hover {
    color: #ddd;
}

.table-container {
    display: flex;
    align-items: center;
}

/* Estilos para la tabla de navegación */
nav table {
    display: flex;
}

nav table tr {
    list-style: none;
    margin: 0;
    padding: 0;
}

/* Estilos para el botón de logout */
.btn-logout {
    height: 70px;
    vertical-align: middle;
}

/* Media Queries para Responsiveness */
@media (max-width: 768px) {
    nav {
        flex-direction: column;
        text-align: center;
    }

    .title-logo {
        margin-bottom: 10px;
    }

    nav table {
        flex-direction: column;
    }

    nav a {
        margin: 10px 0;
    }
}


/* Estilos para evitar el scroll y hacer la imagen responsive */
html, body {
    height: 100%;
    overflow: hidden;
}

@media (max-width: 768px) {
    nav {
        flex-direction: column;
        text-align: center;
    }

    .title-logo {
        margin-bottom: 10px;
    }

    nav table {
        flex-direction: column;
    }

    nav a {
        margin: 10px 0;
    }
}


/* Estilos para el contenedor principal */
.main-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

/* Estilos para el contenedor de la información */

.footer {
    width: 100%;
    padding: 20px;
    background-color: #7D0457; /* Color para el footer */
    color: white;
    text-align: center;
}

@media (max-width: 768px) {
    main {
        flex-direction: column; /* Cambia a un diseño de columna */
        text-align: center; /* Centra los elementos en pantallas pequeñas */
    }

    .informacion-web {
        max-width: 100%; /* Ocupa todo el ancho en pantallas pequeñas */
        margin-top: 20px; /* Espacio entre la imagen y la información */
    }
}

    </style>
</head>
<body>
    
    <nav>
        <div class="title-logo">
            <img src="{{asset('assets/logo_horizontal.jpeg')}}" alt="logo" >
        </div>

        <table >
            <tr><a href="/">INICIO</a></tr>
            <tr><a href="{{route('apoderado.index')}}">PERFIL APODERADO</a></tr>
            <tr><a href="{{route('alumno.index')}}">PERFIL ESTUDIANTE</a></tr>
            <tr><a href="{{route('horario')}}">HORARIO 2024</a></tr>
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        CERRAR SESION
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </table>
    </nav>
</body>

</html>
