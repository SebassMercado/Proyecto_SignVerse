<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Sexo;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::all();

        return view('autores.index', ['autores' => $autores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sexos = Sexo::all();

        return view('autores.create', ['sexos' => $sexos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|min:3|max:50',
            'apellidos' => 'required|min:3|max:50',
            'cod_sexo_fk' => 'required'
        ]);

        Autor::create($request->all());

        return redirect()->route('autores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        $sexos = Sexo::all();

        return view('autores.edit', ['sexos' => $sexos,  'autor' => $autor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
        $request->validate([
            'nombres' => 'required|min:3|max:50',
            'apellidos' => 'required|min:3|max:50',
            'cod_sexo_fk' => 'required'
        ]);

        $autor->update($request->all());

        return redirect()->route('autores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        $autor->delete();

        return redirect()->route('autores.index');
    }
}
