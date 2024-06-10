@extends('layout')
@section('title','Areas Registradas')
@section('content')
<style>
    
/* Estilos específicos para la vista de Areas Registradas */
.title-areas-registradas {
    text-align: center;
    margin-bottom: 20px;
}

.box-areas-registradas {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
}

.table-areas-registradas {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table-areas-registradas th, .table-areas-registradas td {
    padding: 8px;
    text-align: center;
}

.table-areas-registradas th {
    background-color: #f2f2f2;
}

.table-areas-registradas tr:nth-child(even) {
    background-color: #f2f2f2;
}

.btn-regresar {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

.btn-regresar:hover {
    background-color: #45a049;
}

</style>

<div class="container-areas-registradas">
    <div class="box-areas-registradas">
        <h1 class="title-areas-registradas">Areas Registradas</h1>
        <table class="table-areas-registradas">
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
                                @if ($loop->first)
                                    {{ $detalle->alumno->gradoSeccion->seccion->Descripcion }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($area->detalleAreas as $detalle)
                                @if ($loop->first)
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
</div>

@endsection
