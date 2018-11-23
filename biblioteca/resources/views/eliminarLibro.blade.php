@extends('layouts.app')
	@section('content')


		<div class="container">
			
				@foreach($libros as $libro)
			<form action="{{ route('libros.destroy',$libro->id) }}" method="DELETE">
				<div class="form-row">
						<div class="col-md-3">
							{{ $libro->nombre }}
						</div>	
						<div class="col-md-3">
							{{ $libro->editorial }}
						</div>	
						<div class="col-md-3">
							{{ $libro->anio }}
						</div>	
						<div class="col-md-3">
							{{ $libro->ubicacionBiblioteca }}
						</div>	
						<div class="col-md-3">
							{{ $libro->autor }}
						</div>	
						<div class="col-md-3">
							{{ $libro->areaConocimiento }}
						</div>	
						<div class="col-md-3">
							{{ $libro->diasPrestamo }}
						</div>	
						<div class="col-md-3">
							{{ $libro->tipo_id }}
						</div>	
						<div class="form-group">
							<input type="submit" role="button" class="btn btn-danger" value="Eliminar" name="Eliminar">					
						</div>	
				</div>
				@endforeach
			</form>
					
		</div>

	@endsection