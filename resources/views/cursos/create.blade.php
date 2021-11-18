@extends('layaouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    
    <h1>Pagina para crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
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
            <textarea name="description" cols="30" rows="10">{{old('description')}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        
        @error('categoria')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <br>

        <button type="submit">Enviar formulario</button>
    </form>
@endsection
