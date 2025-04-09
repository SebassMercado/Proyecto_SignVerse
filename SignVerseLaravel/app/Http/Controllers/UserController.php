<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ciudad;
use App\Models\TipoDocumento;
use App\Models\TipoUsuario;
use App\Models\Genero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['ciudad', 'tipoDocumento', 'tipoUsuario'])->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $ciudades = Ciudad::all();
        $tipos_documento = TipoDocumento::all();
        $tipos_usuario = TipoUsuario::all();
        $generos = Genero::all();
        return view('users.create', compact('ciudades', 'tipos_documento', 'tipos_usuario', 'generos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'cod_tipo_fk' => 'required',
            'cod_tipo_doc_fk' => 'required',
            'ciudad_id' => 'required',
            'cod_genero_fk' => 'required',
            'num_id' => 'required|numeric',
            'discapacidad_aud' => 'required|boolean',
            'fecha_naci' => 'required|date',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente');
    }

    public function edit(User $user)
    {
        $ciudades = Ciudad::all();
        $tipos_documento = TipoDocumento::all();
        $tipos_usuario = TipoUsuario::all();
        $generos = Genero::all();
        return view('users.edit', compact('user', 'ciudades', 'tipos_documento', 'tipos_usuario', 'generos'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'lastname' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'cod_tipo_fk' => 'required',
            'cod_tipo_doc_fk' => 'required',
            'ciudad_id' => 'required',
            'cod_genero_fk' => 'required',
            'num_id' => 'required|numeric',
            'discapacidad_aud' => 'required|boolean',
            'fecha_naci' => 'required|date',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        }

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente');
    }
}

