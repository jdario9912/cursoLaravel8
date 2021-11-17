@extends('layaouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    
    <h1>Pagina para crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="description" cols="30" rows="10"></textarea>
        </label>
        <br>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria">
        </label>
        <br>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
