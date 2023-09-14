@extends('layout')
@section('title','Boleta Notas')
@section('content')
    <div class="box-areas">
        <h1>Boleta de Notas</h1>
        <table>
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
            @foreach ($resultados as $resultados)
                <tr>
                    <td>{{$resultados->AreaID}}</td>
                    <td>{{$resultados->Docente}}</td>
                    <td>{{$resultados->Seccion}}</td>
                    <td>{{$resultados->Area}}</td>
                    <td>{{$resultados->Grado}}</td>
                    <td>{{$resultados->Competencia1}}</td>
                    <td>{{$resultados->Competencia2}}</td>
                    <td>{{$resultados->Competencia3}}</td>
                    <td>{{$resultados->Competencia4}}</td>
                </tr>
            @endforeach
        </table>

        <a class="btn-regresar" href="{{route('alumno.index')}}">REGRESAR</a>
    </div>

@endsection