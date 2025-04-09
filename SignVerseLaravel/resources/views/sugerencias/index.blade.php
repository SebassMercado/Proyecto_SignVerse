@extends('layouts.app')

@section('title', 'Listado de Sugerencias')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <a href="{{ route('home') }}" class="btn btn-dark btn-lg">Volver al Panel</a>
        <a href="{{ route('sugerencias.create') }}" class="btn btn-primary btn-lg">Nueva Sugerencia</a>
    </div>

    <h1 class="display-4 text-center text-primary mb-4">Listado de Sugerencias</h1>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Mensaje</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sugerencias as $sugerencia)
                    <tr>
                        <td>{{ $sugerencia->id }}</td>
                        <td>{{ $sugerencia->titulo }}</td>
                        <td>{{ Str::limit($sugerencia->mensaje, 50) }}</td>
<td>
    <span class="badge badge-{{ $sugerencia->estado == 'pendiente' ? 'light' : 'success' }} text-dark">
        {{ Str::limit(ucfirst($sugerencia->estado), 50) }}
    </span>
</td>

</td>
                        <td>{{ $sugerencia->created_at->format('Y-m-d') }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('sugerencias.edit', $sugerencia->id) }}" class="btn btn-warning btn-sm mr-2">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <form action="{{ route('sugerencias.destroy', $sugerencia->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta sugerencia?')">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endpush
