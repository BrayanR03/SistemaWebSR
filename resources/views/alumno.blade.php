@extends('layout')
@section('title','Alumno')
@section('content')
<style>
    
/* Estilos para el contenedor de datos del alumno */
.boxDatosAlumno {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

/* Estilos para el título de datos */
.title-datos {
    text-align: center;
    margin-bottom: 20px;
}

/* Estilos para el contenedor de perfil y datos del alumno */
.box-perfil-datos-alumno {
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
}

/* Estilos para la imagen de perfil del alumno */
.box-perfil-btnEditar-alumno h2 {
    margin-bottom: 10px;
}

.box-perfil-btnEditar-alumno img {
    display: block;
    margin: 0 auto 10px;
    border-radius: 50%;
}

/* Estilos para los datos del alumno */
.box-datos-alumno {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 10px;
}

.box-datos-lbl-text {
    border-bottom: 1px solid #ccc;
    padding-bottom: 5px;
}

/* Estilos para los botones del alumno */
.box-buttoms-alumno {
    text-align: center;
}

.btn-perfil-alumno {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    background-color: #7D0457;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

/* Media query para pantallas pequeñas */
@media (max-width: 768px) {
    .box-datos-alumno {
        grid-template-columns: 1fr;
    }
}
</style>
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
