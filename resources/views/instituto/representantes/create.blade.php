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
					{!!Form::open(array('url'=>'instituto/representantes','method'=>'POST','autocomplete'=>'off')) !!}
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

						<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_nombre">Nombres</label>
					<input type="text" name="representantes_nombre" class="form-control" value="{{old('representantes_nombre')}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_apellido">Apellidos</label>
					<input type="text" name="representantes_apellido" class="form-control" value="{{old('representantes_apellido')}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_cedula">Cédula</label>
					<input type="text" name="representantes_cedula" class="form-control" value="{{old('representantes_cedula')}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_edad">Edad</label>
					<input type="text" name="representantes_edad" class="form-control" value="{{old('representantes_edad')}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_fechanacimiento">Fecha Nacimiento</label>
					<input type="text" name="representantes_fechanacimiento" class="form-control" value="{{old('representantes_fechanacimiento')}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_paisnacimiento">Pais de Nacimiento</label>
					<input type="text" name="representantes_paisnacimiento" class="form-control" value="{{old('representantes_paisnacimiento')}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_nacionalidad">Nacionalidad</label>
					<input type="text" name="representantes_nacionalidad" class="form-control" value="{{old('representantes_nacionalidad')}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_direccion">Direccion</label>
					<input type="text" name="representantes_direccion" class="form-control" value="{{old('representantes_direccion')}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_parentesco">Parentesco</label>
					<input type="text" name="representantes_parentesco" class="form-control" value="{{old('representantes_parentesco')}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_ocupacion">Ocupacion</label>
					<input type="text" name="representantes_ocupacion" class="form-control" value="{{old('representantes_ocupacion')}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_direcionlaboral">Direccion Laboral</label>
					<input type="text" name="representantes_direcionlaboral" class="form-control" value="{{old('representantes_direcionlaboral')}}">
				</div>
			</div>
			
			<div class="col-lg-12 col-sm-6">
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