@extends('layout')
@section('title','Apoderado | Perfil')
@section('content')
    @if (session('id'))
        {{-- <p>ID ACA: {{session('id')}}</p> --}}
    @endif

    <div class="boxDatos">
        <h1 class="title-datos">Datos Básicos</h1>

        @if ($apoderado)
        @foreach ($apoderado as $apoderado)

            <div class="box-perfil-datos">
                <div class="box-perfil-btnEditar">
                    <h2>PERFIL</h2>
                    @if ($apoderado->image)
                    <img src="/storage/{{$apoderado->image}}" alt="{{$apoderado->Nombres}}" width="50" height="50">
                @endif

                <a href="{{route('apoderado.edit',$apoderado)}}">EDITAR PERFIL</a>
                </div>

                <div class="box-datos">
                    <div class="box-datos-lbl-text">
                        <p>ApoderadoID</p>
                        <p>{{$apoderado->ApoderadoID}}</p>
                    </div>

                    <div class="box-datos-lbl-text">
                        <p>APELLIDO</p>
                    <p>{{$apoderado->Apellidos}}</p>
                    </div>

                    <div class="box-datos-lbl-text">
                        <p>Alumna A Cargo</p>
                        <p>
                        {{$apoderado->alumno->Apellidos.','.$apoderado->alumno->Nombres}}
                        </p>
                    </div>

                    <div class="box-datos-lbl-text">
                        <p>NOMBRES</p>
                        <p>{{$apoderado->Nombres}}</p>
                    </div>

                    <div class="box-datos-lbl-text">
                        <p>DNI</p>
                        <p>{{$apoderado->Dni}}</p>
                    </div>

                    <div class="box-datos-lbl-text">
                        <p>FECHA NACIMIENTO</p>
                    <p>{{$apoderado->FechaNacimiento}}</p>
                    </div>

                    <div class="box-datos-lbl-text">
                        <p>TELEFONO</p>
                    <p>{{$apoderado->Telefono}}</p>
                    </div>     
                </div>
            </div>
        @endforeach
    @else
        <h1>No Hay Datos para mostrar</Datag></h1>
    @endif
    </div>
@endsection