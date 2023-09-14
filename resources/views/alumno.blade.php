@extends('layout')
@section('title','Alumno')
@section('content')

    <div class="boxDatos">
        <h1 class="title-datos">Datos Básicos</h1>
    
        @if ($alumno)
            @foreach ($alumno as $alumno)
            {{-- <table> --}}
                {{-- <tr> --}}

                    <div class="box-perfil-datos">
                        <div class="box-perfil-btnEditar">
                            <h2>PERFIL</h2>
                            @if ($alumno->image)
                        <img src="/storage/{{$alumno->image}}" alt="{{$alumno->Nombres}}" width="50" height="50">
                    @endif
    
                    <a href="{{route('alumno.edit',$alumno)}}">EDITAR PERFIL</a>
                        </div>
    
                        <div class="box-datos">
                            <div class="box-datos-lbl-text">
                                <p>AlumnaID</p>
                                <p>{{$alumno->alumno->AlumnoID}}</p>
                            </div>
                            <div class="box-datos-lbl-text">
                                <p>APELLIDO</p>
                                <p>{{$alumno->alumno->Apellidos}}</p>
                            </div>
                            <div class="box-datos-lbl-text">
                                <p>GRADO</p>
                                <p>{{$alumno->gradoSeccion->grado->Descripcion}}</p>
                            </div>                        
                            <div class="box-datos-lbl-text">
                                <p>NOMBRES</p>
                                <p>{{$alumno->alumno->Nombres}}</p>
                            </div>

                            
                           <div class="box-datos-lbl-text">
                            <p>DNI</p>
                            <p>{{$alumno->alumno->Dni}}</p>
                           </div>
                           <div class="box-datos-lbl-text">
                            <p>SECCION</p> 
                            <p>{{$alumno->gradoSeccion->seccion->Descripcion}}</p>
                           </div>

                           <div class="box-datos-lbl-text">
                            <p>FECHA NACIMIENTO</p>
                            <p>{{$alumno->alumno->FechaNacimiento}}</p>
                           </div>

                           <div class="box-datos-lbl-text">
                            <p>TELEFONO</p>
                            <p>{{$alumno->alumno->Telefono}}</p>
                           </div>

                        </div>
       
                    </div>
                    
                
                    
                
                    
                {{-- </tr> --}}
            {{-- </table> --}}
            
                
        @endforeach
            {{-- </table> --}}
        @else
            <h1>No hay Datos Para Mostrar</h1>
        @endif
                <div class="box-buttoms">
                    <a class="btn-perfil" href="{{route('asistencias.index')}}">ASISTENCIAS</a>
                    <a class="btn-perfil"  href="{{route('areas.index')}}">AREAS REGISTRADAS</a>
                    <a class="btn-perfil"  href="{{route('boletanotas.index',['alumnaID'=>$alumno->alumno->AlumnoID])}}">BOLETA DE NOTAS</a>
                    <a class="btn-perfil"  href="{{route('apoderado.index')}}">MI APODERADO</a>     
                </div>   
    </div>

@endsection