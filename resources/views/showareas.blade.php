@extends('layout')
@section('title','Areas Informacion')
@section('content')
<div class="container-show-areas">
    <div class="box-areas-info">
        <h1 class="title-area-info">Información del Área</h1>
        <table class="table-area-info">
            <tr>
                <th>Area ID</th>
                <th>NOMBRE DEL AREA</th>
                <th>Docente Asignado</th>
            </tr>
            <tr>
                <td>{{$area->AreaID}}</td>
                <td>{{$area->Descripcion}}</td>
                <td>{{$area->docente->Apellidos.','.$area->docente->Nombres}}</td>
            </tr>
        </table>
        <h1 class="title-horario">Horarios de Atención del Docente del Área</h1>
        <table class="table-horario">
            <tr>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
            <tr>
                <td>08:00 AM - 09:30 AM</td>
                <td>10:00 AM - 10:30 AM</td>
                <td>11:00 AM - 11:30 AM</td>
                <td>09:00 AM - 10:00 AM</td>
                <td>10:00 AM - 11:00 AM</td>
            </tr>
        </table>
        <a class="btn-regresar" href="{{route('areas.index')}}">REGRESAR</a>
    </div>
</div>
@endsection
