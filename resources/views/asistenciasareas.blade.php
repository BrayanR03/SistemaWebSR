@extends('layout')
@section('title','Mis Asistencias')
    @section('content')
        



    @if ($asistencias->count() > 0)

    <div class="box-areas">
        <table>
            <tr>
                <th>Fecha Asistencia</th>
                <th>Estado</th>
                
            </tr>
            @foreach ($asistencias as $asistencia)
                
                <tr>
                    <td>{{$asistencia->FechaAsistencia}}</td>
                    <td>{{ $asistencia->Asistencia }}</td>
                </tr>
            @endforeach            
        </table>
        <a class="btn-regresar" href="{{route('asistencias.index')}}">REGRESAR</a>
    </div>
    
@else
    <p>No hay Datos</p>
@endif
@endsection