@extends('layaouts.plantilla')

@section('title', 'Index')
    
@section('content')

    <h1>pagina de Cursos</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                
                <a href="{{route('cursos.show', $curso->id);}}">{{$curso->name}}</a>
                
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection
