@extends('layout')
@section('title','Editar Alumno')
    @section('content')
    @include('partials.validation-errors')
        <form action="{{route('alumno.update',$alumno)}}" enctype="multipart/form-data" method="post">
           
            
            @method('PATCH')
            @include('partials.formalumno',['btnText'=>'Actualizar'])
        </form>
@endsection