@extends('layout')
@section('title','Boleta Notas')
@section('content')
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
