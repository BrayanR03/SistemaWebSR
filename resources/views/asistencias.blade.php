@extends('layout')
@section('title','Asistencias | Alumnas')
@section('content')
<style>
    
/* Estilos para el contenedor de la primera tabla de áreas */
.box-areas {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
    overflow-y: auto; /* Habilitar el desplazamiento vertical */
    max-height: 650px; /* Altura máxima del contenedor */
    margin-bottom: 20px;
}

/* Estilos para la tabla de áreas */
.box-areas table {
    width: 100%;
    border-collapse: collapse;
}

.box-areas th,
.box-areas td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.box-areas th {
    background-color: #7D0457;
    color: white;
}

/* Estilos para el contenedor de la segunda tabla de resumen de asistencias */
.box-resumen-asistencias {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
    overflow-y: auto; /* Habilitar el desplazamiento vertical */
    max-height: 500px; /* Altura máxima del contenedor */
}

/* Estilos para la tabla de resumen de asistencias */
.box-resumen-asistencias table {
    width: 100%;
    border-collapse: collapse;
}

.box-resumen-asistencias th,
.box-resumen-asistencias td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.box-resumen-asistencias th {
    background-color: #7D0457;
    color: white;
}

/* Estilos para el botón de regresar */
.btn-regresar-asistencias {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #7D0457;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

/* Media query para pantallas pequeñas */
@media (max-width: 768px) {
    .box-areas table,
    .box-resumen-asistencias table {
        font-size: 14px;
    }
}
.container {
    display: flex;
}

.box-areas {
    flex: 1;
    margin-right: 20px; /* Espacio entre las tablas */
}

.box-resumen-asistencias {
    flex: 1;
}

</style>

<div class="container">
    <div class="box-areas">
        <h1>Asistencias por Área</h1>
        <table>
            <tr>
                <th>AreaID</th>
                <th>NOMBRE DEL AREA</th>
                <th>SECCION</th>
                <th>GRADO</th>
                <th>DOCENTE ASIGNADO</th>
                <th>MIS ASISTENCIAS</th>
            </tr>
            @foreach ($asistencias->first()->alumno->areas as $areas)
                <tr>
                    <td>{{$areas->AreaID}}</td>       
                    <td>{{$areas->Descripcion}}</td>
                    <td>
                        @foreach ($areas->detalleAreas as $detalle)
                            @if ($loop->first) <!-- Mostrar la sección solo una vez por área -->
                                {{ $detalle->alumno->gradoSeccion->seccion->Descripcion }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($areas->detalleAreas as $detalle)
                            @if ($loop->first) <!-- Mostrar el grado solo una vez por área -->
                                {{ $detalle->alumno->gradoSeccion->grado->Descripcion }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $areas->docente->Apellidos.','.$areas->docente->Nombres }}</td>
                    <td><a href="{{route('asistenciasareas.index',['AreaID'=>$areas->AreaID])}}">Ver Aquí</a></td>
                </tr>
            @endforeach            
        </table>
    </div>

    <div class="box-resumen-asistencias">
        <h1>Resumen General de Asistencias</h1>
        <table>
            <tr>
                <th>AREA</th>
                <th>ASISTENCIAS</th>
                <th>FALTAS</th>
                <th>TARDANZAS</th>
                <th>TOTAL</th>
            </tr>
            @foreach ($resultados as $resultado)
                <tr>
                    <td>{{$resultado->AREA}}</td>
                    <td>{{$resultado->ASISTENCIA}}</td>
                    <td>{{$resultado->FALTAS}}</td>
                    <td>{{$resultado->TARDANZAS}}</td>
                    <td>{{$resultado->Total}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

<a class="btn-regresar-asistencias" href="{{route('alumno.index')}}">REGRESAR</a>

@endsection
