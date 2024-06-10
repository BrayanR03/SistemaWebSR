@extends('layout')
@section('title','Areas Informacion')
@section('content')
<style>
    /* Estilos específicos para la vista de Información del Área */
.title-area-info {
    text-align: center;
    margin-bottom: 20px;
}

.box-areas-info {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
}

.table-area-info {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table-area-info th, .table-area-info td {
    padding: 8px;
    text-align: center;
}

.table-area-info th {
    background-color: #f2f2f2;
}

.table-area-info tr:nth-child(even) {
    background-color: #f2f2f2;
}

.title-horario {
    text-align: center;
    margin-top: 20px;
    margin-bottom: 10px;
}

.table-horario {
    width: 100%;
    border-collapse: collapse;
}

.table-horario th, .table-horario td {
    padding: 8px;
    text-align: center;
}

.table-horario th {
    background-color: #f2f2f2;
}

.table-horario tr:nth-child(even) {
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
