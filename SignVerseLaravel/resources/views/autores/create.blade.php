@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('autores.index') }}" class="btn btn-secondary mb-2">Volver</a>
			</div>

			<div class="col-md-12">
				<form action="{{ route('autores.store') }}" method="POST">
					@csrf
					<div class="col-md-3">
						<label for="nombres" class="form-control-label">Nombres</label>
						<input class="form-control" type="text" id="nombres" name="nombres" value="">
						@error('nombres')
							<small class="text-danger">{{ $message }}</small><br>
						@enderror

						<label for="apellidos" class="form-control-label">Apellidos</label>
						<input class="form-control" type="text" id="apellidos" name="apellidos" value="">
						@error('apellidos')
							<small class="text-danger">{{ $message }}</small><br>
						@enderror

						<label for="sexo" class="form-control-label">Sexo</label>
						<select name="cod_sexo_fk" id="sexo" class="form-select">
							@foreach($sexos as $sexo)
								<option value="{{ $sexo->cod_sexo }}">{{ $sexo->descripcion }}</option>
							@endforeach
						</select>
						@error('cod_sexo_fk')
							<small class="text-danger">{{ $message }}</small><br>
						@enderror
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary mt-2">Guardar</button>
					</div>					
				</form>				
			</div>
		</div>
	</div>
@endsection