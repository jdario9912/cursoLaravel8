@extends('layaouts.plantilla')

@section('title', 'Home')
    
@section('content')
    
    <h1>pagina de Home</h1>
    <a href="{{route('cursos.index')}}">Cursos</a>
@endsection