@extends('layout')
@section('title','Inicio')
@section('content')
@if(session('id'))
{{-- <p>ID del usuario autenticado: {{ session('id') }}</p> --}}
<div class="main-container">
    <div class="portada">
        <img src="{{asset('assets/portada.png')}}" alt="logo" height="750px">
    </div>
</div>

@endif

@endsection
