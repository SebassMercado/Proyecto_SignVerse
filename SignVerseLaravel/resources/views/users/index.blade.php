@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-end mb-3">
    <a href="{{ route('home') }}" class="btn btn-dark">Volver al Panel</a>
</div>

    <h2>Lista de Usuarios</h2>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Crear nuevo usuario</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Tipo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->name }} {{ $usuario->name_2 }}</td>
                    <td>{{ $usuario->lastname }} {{ $usuario->lastname_2 }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->cod_tipo_fk == 'A' ? 'Admin' : 'Cliente' }}</td>
                    <td>
                        <a href="{{ route('users.edit', $usuario->id) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('users.destroy', $usuario->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
