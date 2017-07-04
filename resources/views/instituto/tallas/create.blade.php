@extends ('layouts.admin')
@section ('contenido')
@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
	<div class="tab-pane fade in">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					{!!Form::open(array('url'=>'instituto/tallas','method'=>'POST','autocomplete'=>'off')) !!}
					{{Form::token()}}
					<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Estudiante</label>
									<select name="iddatos_estudiantes" class="form-control">
										@foreach ($datos_estudiantes as $ti)
											<option value="{{$ti->iddatos_estudiantes}}">{{$ti->nombres}}</option>
										@endforeach
									</select>
							</div>
						</div>
					<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="talla_pantalon">Talla de Pantalon</label>
					<input type="text" name="talla_pantalon" class="form-control" value="{{old('talla_pantalon')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="talla_camisa">Talla de Camisa</label>
					<input type="text" name="talla_camisa" class="form-control" value="{{old('talla_camisa')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="talla_zapato">Talla de Zapato</label>
					<input type="text" name="talla_zapato" class="form-control" value="{{old('talla_zapato')}}">
				</div>
			</div>
			
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
			</div>
				{!!Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection 