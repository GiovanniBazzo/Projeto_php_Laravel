<?php

namespace App\Http\Controllers;

use App\Models\Curso; 
use Illuminate\Http\Request;

class CursoController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'descricao' => ['required', 'string']
        ]);

        Curso::create($dados);

        return redirect()
            ->route('curso.index')
            ->with('sucess', 'Curso Criado com sucesso.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
