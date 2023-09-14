@extends('layout')
@section('title','Editar Apoderado')
    @section('content')
    @include('partials.validation-errors')
        <form action="{{route('apoderado.update',$apoderado)}}" enctype="multipart/form-data" method="post">
            <table>
                
            </table>
            @method('PATCH')
            @include('partials.formapoderado',['btnText'=>'Actualizar'])
        </form>
@endsection