@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar usuario</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('users.form', ['user' => $user])
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
