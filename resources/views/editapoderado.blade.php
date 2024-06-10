@extends('layout')
@section('title','Editar Apoderado')
    @section('content')
    <style>
        /* Estilos para el formulario de edición */
.form-editar {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
}

.form-editar table {
    width: 100%;
}

.form-editar th,
.form-editar td {
    padding: 10px;
    border-bottom: 1px solid #ccc;
}

.form-editar th {
    text-align: left;
}

.form-editar input[type="text"],
.form-editar input[type="file"] {
    width: calc(100% - 20px); /* Para compensar el padding */
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-editar button {
    padding: 10px 20px;
    background-color: #7D0457;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.form-editar .btn-regresar {
    display: block;
    text-align: center;
    margin-top: 10px;
    color: #7D0457;
    text-decoration: none;
}

.form-editar .btn-regresar:hover {
    text-decoration: underline;
}

    </style>
    @include('partials.validation-errors')
        <form action="{{route('apoderado.update',$apoderado)}}" enctype="multipart/form-data" method="post" class="form-editar">
            
            @method('PATCH')
            @include('partials.formapoderado',['btnText'=>'Actualizar'])
        </form>
@endsection