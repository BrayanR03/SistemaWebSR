@extends('layout')
@section('title','Boleta Notas')
@section('content')
<style>
    
/* Estilos específicos para la vista de Boleta de Notas */
.title-boleta {
    text-align: center;
    margin-bottom: 20px;
}

.box-areas-notas {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
}

.table-boleta {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table-boleta th, .table-boleta td {
    padding: 8px;
    text-align: center;
}

.table-boleta th {
    background-color: #f2f2f2;
}

.table-boleta tr:nth-child(even) {
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
    <div class="container-boleta-notas">
        <div class="box-areas-notas">
            <h1 class="title-boleta">Boleta de Notas</h1>
            <table class="table-boleta">
                <tr>
                    <th>AreaID</th>
                    <th>Docente</th>
                    <th>Seccion</th>
                    <th>Area</th>
                    <th>Grado</th>
                    <th>Competencia1</th>
                    <th>Competencia2</th>
                    <th>Competencia3</th>
                    <th>Competencia4</th>
                </tr>
                @foreach ($resultados as $resultado)
                    <tr>
                        <td>{{$resultado->AreaID}}</td>
                        <td>{{$resultado->Docente}}</td>
                        <td>{{$resultado->Seccion}}</td>
                        <td>{{$resultado->Area}}</td>
                        <td>{{$resultado->Grado}}</td>
                        <td>{{$resultado->Competencia1}}</td>
                        <td>{{$resultado->Competencia2}}</td>
                        <td>{{$resultado->Competencia3}}</td>
                        <td>{{$resultado->Competencia4}}</td>
                    </tr>
                @endforeach
            </table>

            <a class="btn-regresar" href="{{route('alumno.index')}}">REGRESAR</a>
        </div>
    </div>
@endsection
