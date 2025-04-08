@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-success">CRUD Autores</h2>

				<a href="{{ route('autores.create') }}" class="btn btn-primary mb-2">Agregar</a>
			</div>
			
			<div class="col-md-8">
				<table class="table table-bordered">
					<thead>
						<tr class="text-center">
							<th>Código</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Sexo</th>
							<th style="width: 30%;">Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($autores as $autor)
							<tr>
								<td class="text-center">{{ $autor->cod_autor }}</td>
								<td>{{ $autor->nombres }}</td>
								<td>{{ $autor->apellidos }}</td>
								<td>{{ $autor->sexo->descripcion }}</td>
								<td class="text-center">
									<a href="{{ route('autores.edit', $autor) }}" class="btn btn-success">Editar</a>
									<form action="{{ route('autores.destroy', $autor) }}" method="POST" class="d-inline-block">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger"
										onclick="return confirm('Está seguro de Eliminar el Autor??!!');" >Eliminar</button>
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