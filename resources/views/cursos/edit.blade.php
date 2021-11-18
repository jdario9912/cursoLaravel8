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
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <br>

        <label>
            Descripcion:
            <br>
            <textarea name="description" cols="30" rows="10">{{old('description', $curso->description)}}</textarea>
        </label>

        @error('description')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <br>

        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->description)}}">
        </label>

        @error('categoria')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <br>

        <button type="submit">Editar formulario</button>
    </form>
@endsection
