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
					{!!Form::open(array('url'=>'instituto/transporte','method'=>'POST','autocomplete'=>'off')) !!}
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
					<label for="transporte_nombre">Transporte Nombre</label>
					<input type="text" name="transporte_nombre" class="form-control" value="{{old('transporte_nombre')}}" pattern="[A-Z a-z]{1,100}" maxlength="100">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="transporte_cedula">Transporte Cedula</label>
					<input type="text" name="transporte_cedula" class="form-control" value="{{old('transporte_cedula')}}" pattern="[0-9]{1,11}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="transporte_telefono">Transporte Telefono</label>
					<input type="text" name="transporte_telefono" class="form-control" value="{{old('transporte_telefono')}}" pattern="[0-9]{1,11}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="transporte_vehiculo">Transporte Vehiculo</label>
					<input type="text" name="transporte_vehiculo" class="form-control" value="{{old('transporte_vehiculo')}}" pattern="[A-Z a-z]{1,100}" maxlength="100">
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