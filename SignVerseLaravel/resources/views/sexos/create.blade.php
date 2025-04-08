@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('sexos.index') }}" class="btn btn-secondary mb-2">Volver</a>
			</div>

			<div class="col-md-12">
				<form action="{{ route('sexos.store') }}" method="POST">
					@csrf
					<div class="col-md-3">
						<label for="descripcion" class="form-control-label">Descripción Sexo</label>
						<input class="form-control" type="text" id="descripcion" name="descripcion" value="">
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary mt-2">Guardar</button>
					</div>					
				</form>
				@error('descripcion')
					<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
		</div>
	</div>
@endsection