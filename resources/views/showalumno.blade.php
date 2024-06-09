
@extends('layout')
@section('title','Perfil | Alumno')
    @section('content')
    <div class="boxDatos">
        <h1>Datos Alumno</h1>
        <h2>Bienvenida {{$alumno->Apellidos.' '.$alumno->Nombres}}</h2>
        <table>
            <tr>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Dni</th>
                <th>Fecha Nacimiento</th>
                <th>Telefono</th>
                <th>Apoderado ID</th>
                <th>GradoSeccionID</th>
            </tr>
            <tr>
                <td>{{$alumno->Apellidos}}</td>
                <td>{{$alumno->Nombres}}</td>
                <td>{{$alumno->Dni}}</td>
                <td>{{$alumno->FechaNacimiento}}</td>
                <td>{{$alumno->Telefono}}</td>
                <td>{{$alumno->ApoderadoID}}</td>
                <td>{{$alumno->GradoSeccionID}}</td>
            </tr>
            <tr>
                <td><img src="/storage/{{$alumno->image}}" alt="{{$alumno->Nombres}}" width="100" height="100"></td>
            </tr>
        </table>
        <tr><a href="{{route('alumno.edit',$alumno)}}">EDITAR</a></tr>
    </div>
    
@endsection