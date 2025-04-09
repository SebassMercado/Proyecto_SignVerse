@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/estiloIniciarSesion.css') }}">
</head>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 d-flex justify-content-center">
            <div class="card p-4">

                <div class="card-body text-center">
                    <img src="{{ asset('img/Logo.png') }}" alt="Logo SignVerse" class="logo-img mb-3">
                    <div class="card-header text-center mb-3">{{ __('Crear nuevo usuario') }}</div>

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

                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" required placeholder="Primer Nombre">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="name_2" class="form-control" value="{{ old('name_2', $user->name_2 ?? '') }}" placeholder="Segundo Nombre (Opcional)">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="lastname" class="form-control" value="{{ old('lastname', $user->lastname ?? '') }}" required placeholder="Primer Apellido">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="lastname_2" class="form-control" value="{{ old('lastname_2', $user->lastname_2 ?? '') }}" placeholder="Segundo Apellido (Opcional)">
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required placeholder="Correo Electrónico">
                        </div>

                        <div class="mb-3">
                            <input type="text" name="num_id" class="form-control" value="{{ old('num_id', $user->num_id ?? '') }}" required placeholder="Número de Documento">
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" {{ isset($user) ? '' : 'required' }} 
                            placeholder="Contraseña {{ isset($user) ? '(opcional)' : '' }}">
                        </div>

                        <div class="mb-3">
    <select name="cod_tipo_doc_fk" class="form-control" required>
        <option value="" disabled {{ old('cod_tipo_doc_fk', $user->cod_tipo_doc_fk ?? '') == '' ? 'selected' : '' }}>
            Tipo de Documento
        </option>
        @foreach($tipos_documento as $tipo)
            <option value="{{ $tipo->id }}" {{ old('cod_tipo_doc_fk', $user->cod_tipo_doc_fk ?? '') == $tipo->id ? 'selected' : '' }}>
                {{ $tipo->descripcion }}
            </option>
        @endforeach
    </select>
</div>


                        <div class="mb-3">
    <select name="ciudad_id" class="form-control">
        <option value="" disabled {{ old('ciudad_id', $user->ciudad_id ?? '') == '' ? 'selected' : '' }}>
            Ciudad
        </option>
        @foreach($ciudades as $ciudad)
            <option value="{{ $ciudad->id }}" {{ old('ciudad_id', $user->ciudad_id ?? '') == $ciudad->id ? 'selected' : '' }}>
                {{ $ciudad->descripcion }}
            </option>
        @endforeach
    </select>
</div>


                        <div class="mb-3">
    <select name="cod_genero_fk" class="form-control">
        <option value="" disabled {{ old('cod_genero_fk', $user->cod_genero_fk ?? '') == '' ? 'selected' : '' }}>
            Género
        </option>
        @foreach($generos as $genero)
            <option value="{{ $genero->cod_genero }}" {{ old('cod_genero_fk', $user->cod_genero_fk ?? '') == $genero->cod_genero ? 'selected' : '' }}>
                {{ $genero->descripcion }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <select name="discapacidad_aud" class="form-control">
        <option value="" disabled {{ old('discapacidad_aud', $user->discapacidad_aud ?? '') == '' ? 'selected' : '' }}>
            ¿Presenta alguna discapacidad auditiva?
        </option>
        <option value="0" {{ old('discapacidad_aud', $user->discapacidad_aud ?? '') == '0' ? 'selected' : '' }}>No</option>
        <option value="1" {{ old('discapacidad_aud', $user->discapacidad_aud ?? '') == '1' ? 'selected' : '' }}>Sí</option>
    </select>
</div>


                        <div class="mb-3">
    <input type="text" onfocus="(this.type='date')" name="fecha_naci" class="form-control"
        value="{{ old('fecha_naci', $user->fecha_naci ?? '') }}"
        placeholder="Fecha de nacimiento">
</div>



                        <div class="mb-3">
    <select name="cod_tipo_fk" class="form-control" required>
        <option value="" disabled {{ old('cod_tipo_fk', $user->cod_tipo_fk ?? '') == '' ? 'selected' : '' }}>
            Rol
        </option>
        <option value="A" {{ old('cod_tipo_fk', $user->cod_tipo_fk ?? '') == 'A' ? 'selected' : '' }}>Administrador</option>
        <option value="C" {{ old('cod_tipo_fk', $user->cod_tipo_fk ?? '') == 'C' ? 'selected' : '' }}>Cliente</option>
    </select>
</div>

                        <div class="d-flex justify-content-center gap-3">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
</div>




                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
