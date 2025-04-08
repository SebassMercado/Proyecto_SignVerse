<?php

namespace App\Http\Controllers;

use App\Models\Sexo;
use Illuminate\Http\Request;

class SexoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$sexos = Sexo::orderBy('cod_sexo', 'ASC')->get();
        $sexos = Sexo::all();

        return view('sexos.index', ['sexos' => $sexos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sexos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|min:3|max:30|unique:lib_sexo'
        ]);

        Sexo::create($request->all());

        return redirect()->route('sexos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sexo $sexo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sexo $sexo)
    {
        return view('sexos.edit', ['sexo' => $sexo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sexo $sexo)
    {
        $request->validate([
            'descripcion' => 'required|min:3|max:30|unique:lib_sexo'
        ]);

        $sexo->update($request->all());

        return redirect()->route('sexos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sexo $sexo)
    {
        $sexo->delete();

        return redirect()->route('sexos.index');
    }
}
