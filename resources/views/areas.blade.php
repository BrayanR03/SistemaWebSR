@extends('layout')
@section('title','Areas Registradas')
    @section('content')

    <div class="box-areas">

        <h1>Areas Registradas</h1>
        
        <table>
            
            <tr>
                <th>AreaID</th>
                <th>NOMBRE DEL AREA</th>
                <th>SECCION</th>
                <th>GRADO</th>
                <th>DOCENTE ASIGNADO</th>
                <th>HORARIO ATENCION</th>
            </tr>
            @if ($areas->count() > 0)
            @foreach ($areas as $area)
                <tr>
                    <td>{{ $area->AreaID }}</td>
                    <td>{{ $area->Descripcion }}</td>
                    <td>
                        @foreach ($area->detalleAreas as $detalle)
                            @if ($loop->first) <!-- Mostrar la sección solo una vez por área -->
                                {{ $detalle->alumno->gradoSeccion->seccion->Descripcion }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($area->detalleAreas as $detalle)
                            @if ($loop->first) <!-- Mostrar el grado solo una vez por área -->
                                {{ $detalle->alumno->gradoSeccion->grado->Descripcion }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $area->docente->Apellidos.','.$area->docente->Nombres }}</td>
                    <td><a href="{{route('areas.show',$area)}}">Ver Aquí</a></td>
                </tr>
                
            @endforeach
 
        @else
            <tr>
                <td colspan="6">No Hay Datos Para Mostrar</td>
            </tr>
        @endif
        
        
    </table>

    <a class="btn-regresar" href="{{route('alumno.index')}}">REGRESAR</a>
    </div>
        
        

@endsection