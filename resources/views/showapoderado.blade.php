@extends('layout')
@section('title','Apoderado | Perfil')
@section('content')
    <h1>Datos Apoderado </h1>
    <h3>Bienvenido {{$apoderado->Apellidos.' '.$apoderado->Nombres}}</h3>
    <table>
        <tr>
            <th>Apellidos</th>
            <th>Nombres</th>
            <th>Dni</th>
            <th>Fecha Nacimiento</th>
            <th>Telefono</th>
            <th>UsuarioID</th>
            <th>Foto Perfil</th>
        </tr>
        <tr>
            <td>{{$apoderado->Apellidos}}</td>
            <td>{{$apoderado->Nombres}}</td>
            <td>{{$apoderado->Dni}}</td>
            <td>{{$apoderado->FechaNacimiento}}</td>
            <td>{{$apoderado->Telefono}}</td>
            <td>{{$apoderado->UsuarioID}}</td>
        </tr>
        <tr>
            <td><img src="/storage/{{$apoderado->image}}" alt="{{$apoderado->Nombres}}" width="50" height="50"></td>
        </tr>
    </table>
    <tr>
        <a href="{{route('apoderado.edit',$apoderado)}}">EDITAR</a>
    </tr>
@endsection