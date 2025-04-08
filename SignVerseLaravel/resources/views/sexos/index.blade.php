@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-success">CRUD Sexos</h2>

				<a href="{{ route('sexos.create') }}" class="btn btn-primary mb-2">Agregar</a>
			</div>
			
			<div class="col-md-8">
				<table class="table table-bordered">
					<thead>
						<tr class="text-center">
							<th>Código</th>
							<th>Descripción</th>
							<th style="width: 30%;">Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($sexos as $sexo)
							<tr>
								<td class="text-center">{{ $sexo->cod_sexo }}</td>
								<td>{{ $sexo->descripcion }}</td>
								<td class="text-center">
									<a href="{{ route('sexos.edit', $sexo) }}" class="btn btn-success">Editar</a>
									<form action="{{ route('sexos.destroy', $sexo) }}" method="POST" class="d-inline-block">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger"
										onclick="return confirm('Está seguro de Eliminar el Sexo??!!');" >Eliminar</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection