<?php

namespace App\Http\Controllers;

use App\Models\Sugerencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SugerenciaController extends Controller
{
    public function index()
    {
        $sugerencias = Sugerencia::all();
        return view('sugerencias.index', compact('sugerencias'));
    }

    public function create()
    {
        return view('sugerencias.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:100',
            'mensaje' => 'required',
        ]);

        Sugerencia::create([
            'id_usuario' => Auth::user()->num_id, // Usamos num_id como clave foránea
            'titulo' => $request->titulo,
            'mensaje' => $request->mensaje,
            'estado' => 'pendiente'
        ]);

         if (Auth::user()->cod_tipo_fk == 'A') {
        return view('sugerencias.sugerencia_confirmacion'); // Vista para administrador
    } else {
        return view('cliente.sugerencia_confirmacion'); // Vista para cliente
    }
    }

    public function formularioUsuario()
    {
        return view('cliente.sugerencia_form');
    }

    public function show($id)
    {
        $sugerencia = Sugerencia::findOrFail($id);
        return view('sugerencias.show', compact('sugerencia'));
    }

    public function responder(Request $request, $id)
    {
        $request->validate([
            'respuesta' => 'required|string',
        ]);

        $sugerencia = Sugerencia::findOrFail($id);
        $sugerencia->respuesta = $request->respuesta;
        $sugerencia->estado = 'respondida';
        $sugerencia->save();

        return redirect()->route('sugerencias.show', $id)
            ->with('success', 'Respuesta enviada correctamente.');
    }

    public function edit($id)
    {
        $sugerencia = Sugerencia::findOrFail($id);
        return view('sugerencias.edit', compact('sugerencia'));
    }

    public function update(Request $request, $id)
    {
        $sugerencia = Sugerencia::findOrFail($id);

        $request->validate([
            'respuesta' => 'nullable|string',
            'estado' => 'required|in:pendiente,respondida',
        ]);

        $sugerencia->update([
            'respuesta' => $request->respuesta,
            'estado' => $request->estado,
        ]);

        return redirect()->route('sugerencias.index')->with('success', 'Sugerencia actualizada.');
    }

    public function destroy($id)
    {
        $sugerencia = Sugerencia::findOrFail($id);
        $sugerencia->delete();

        return redirect()->route('sugerencias.index')->with('success', 'Sugerencia eliminada.');
    }
}
