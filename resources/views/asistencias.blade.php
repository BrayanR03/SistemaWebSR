@extends('layout')
@section('title','Asistencias | Alumnas')
@section('content')

<div class="box-areas">
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
    <a class="btn-regresar" href="{{route('alumno.index')}}">REGRESAR</a>
    <table>
        
        <h1>Resumen General de Asistencias</h1>
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
    </table>
</div>

@endsection