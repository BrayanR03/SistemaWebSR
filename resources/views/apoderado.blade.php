@extends('layout')
@section('title','Apoderado | Perfil')
@section('content')
<style>
    
/* Estilos para la caja de datos */
.boxDatos {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

/* Estilos para el título de datos */
.title-datos {
    text-align: center;
    margin-bottom: 20px;
}

/* Estilos para la caja de perfil y datos */
.box-perfil-datos {
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 70px;
    margin-bottom: 20px;
    color: black;
    text-decoration: solid;
    font-style: normal;
}

/* Estilos para la imagen de perfil */
.box-perfil-btnEditar h2 {
    margin-bottom: 10px;
}

.box-perfil-btnEditar img {
    display: block;
    margin: 0 auto 10px;
    border-radius: 50%;
}

/* Estilos para los datos */
.box-datos {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 10px;
}

.box-datos-lbl-text {
    border-bottom: 1px solid #ccc;
    padding-bottom: 5px;
}

/* Media query para pantallas pequeñas */
@media (max-width: 768px) {
    .box-datos {
        grid-template-columns: 1fr;
    }
}


</style>
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
                    <img src="/storage/{{$apoderado->image}}" alt="{{$apoderado->Nombres}}" width="100" height="100">
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