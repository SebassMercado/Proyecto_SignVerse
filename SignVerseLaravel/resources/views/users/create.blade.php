@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear nuevo usuario</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        @include('users.form')
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
