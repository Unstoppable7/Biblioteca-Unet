@extends('layouts.app')
	@section('content')


		<div class="container">
			<form action="{{route('libros.store')}}" method="POST">
				@csrf

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="nombre">Nombre</label>
						<input class="form-control" id="nombre" type="text" placeholder="Nombre" name="nombre" value="">
						
					</div>
					<div class="form-group col-md-6">
						<label for="Editorial">Editorial</label>
						<input class="form-control" id="Editorial" type="text" placeholder="Editorial" name="Editorial" value="">
						
					</div>

					<div class="form-group col-md-6">
						<label for="Autor">Autor</label>
						<input class="form-control" id="Autor" type="text" placeholder="Autor" name="Autor" value="">
						
					</div>
					<div class="form-group col-md-6">
						<label for="Año">Año</label>
						<input class="form-control" id="Año" type="year" placeholder="Año" name="Año" value="">
						
					</div>
					<div class="form-group col-md-6">
						<label for="UbicacionBiblioteca">Ubicacion de Biblioteca</label>
						<input class="form-control" id="UbicacionBiblioteca" type="text" placeholder="Ubicacion de Biblioteca" name="UbicacionBiblioteca" value="">
						
					</div>

					<div class="form-group col-md-6">
						<label for="areaConocimiento">Area de Conocimiento</label>
						<input class="form-control" id="areaConocimiento" type="text" placeholder="Area de Conocimiento" name="areaConocimiento" value="">
						
					</div>

					<div class="form-group col-md-6">
						<label for="diasPrestamo">Dias de Prestamo</label>
						<input class="form-control" id="diasPrestamo" type="number" placeholder="Dias de Prestamo" name="diasPrestamo" value="">
						
					</div>
					
					
					<div class="form-group col-md-1">
					<label for="Tipos">Tipos</label>
					</div>
					<div class="form-group col-md-3">
						<select class="form-control" id="Tipos" name="Tipos">
							
							@foreach($tipos as $tipo)
								 <option value="{{ $tipo->id }}"> {{ $tipo->nombre }} </option>
							@endforeach
								
						</select>
					</div>
		

					</div>				
				
				<div class="form-group">
					<input type="submit" role="button" class="btn btn-dark" value="Crear" name="crear">					

				</div>				
		</div>

	@endsection