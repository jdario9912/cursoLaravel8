<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {

        $cursos = Curso::orderby('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        $curso->save();
        
        return redirect()->route('cursos.show', $curso);
    }
    
    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }
    
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }
    
    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'name' => 'required'|'max:15',
            'description' => 'required'|'min:15',
            'categoria' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        
        $curso->save();
        
        return redirect()->route('cursos.show', $curso);
    }
    
}
