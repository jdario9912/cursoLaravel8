@extends('layaouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    
    <h1>Pagina para editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="description" cols="30" rows="10">{{$curso->description}}</textarea>
        </label>
        <br>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>
        <br>
        <button type="submit">Editar formulario</button>
    </form>
@endsection
