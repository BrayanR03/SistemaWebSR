@extends('layout')
@section('title','Alumno')
@section('content')

    <div class="boxDatosAlumno">
        <h1 class="title-datos">Datos Básicos</h1>
    
        @if ($alumno)
            @foreach ($alumno as $alum)
            {{-- <table> --}}
                {{-- <tr> --}}

                    <div class="box-perfil-datos-alumno">
                        <div class="box-perfil-btnEditar-alumno">
                            <h2>PERFIL</h2>
                            @if ($alum->image)
                        <img src="/storage/{{$alum->image}}" alt="{{$alum->Nombres}}" width="80" height="80">
                    @endif
    
                    <a href="{{route('alumno.edit',$alum)}}">EDITAR PERFIL</a>
                        </div>
    
                        <div class="box-datos-alumno">
                            <div class="box-datos-lbl-text">
                                <p>AlumnaID</p>
                                <p>{{$alum->alumno->AlumnoID}}</p>
                            </div>
                            <div class="box-datos-lbl-text">
                                <p>APELLIDO</p>
                                <p>{{$alum->alumno->Apellidos}}</p>
                            </div>
                            <div class="box-datos-lbl-text">
                                <p>GRADO</p>
                                <p>{{$alum->gradoSeccion->grado->Descripcion}}</p>
                            </div>                        
                            <div class="box-datos-lbl-text">
                                <p>NOMBRES</p>
                                <p>{{$alum->alumno->Nombres}}</p>
                            </div>

                            
                           <div class="box-datos-lbl-text">
                            <p>DNI</p>
                            <p>{{$alum->alumno->Dni}}</p>
                           </div>
                           <div class="box-datos-lbl-text">
                            <p>SECCION</p> 
                            <p>{{$alum->gradoSeccion->seccion->Descripcion}}</p>
                           </div>

                           <div class="box-datos-lbl-text">
                            <p>FECHA NACIMIENTO</p>
                            <p>{{$alum->alumno->FechaNacimiento}}</p>
                           </div>

                           <div class="box-datos-lbl-text">
                            <p>TELEFONO</p>
                            <p>{{$alum->alumno->Telefono}}</p>
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
                <div class="box-buttoms-alumno">
                    <a class="btn-perfil-alumno" href="{{route('asistencias.index')}}">ASISTENCIAS</a>
                    <a class="btn-perfil-alumno"  href="{{route('areas.index')}}">AREAS REGISTRADAS</a>
                    <a class="btn-perfil-alumno"  href="{{route('boletanotas.index',['alumnaID'=>$alum->alumno->AlumnoID])}}">BOLETA DE NOTAS</a>
                    <a class="btn-perfil-alumno"  href="{{route('apoderado.index')}}">MI APODERADO</a>     
                </div>   
    </div>

@endsection
