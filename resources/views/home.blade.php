@extends('layout')
@section('title','Inicio')
@section('content')
@if(session('id'))
{{-- <p>ID del usuario autenticado: {{ session('id') }}</p> --}}
<div class="portada">
    <img src="{{asset('assets/portada.png')}}" alt="logo">
</div>
@endif

@endsection