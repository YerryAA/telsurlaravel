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
					{!!Form::open(array('url'=>'instituto/direccion','method'=>'POST','autocomplete'=>'off')) !!}
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
					<label for="direccion">Direccion</label>
					<input type="text" name="direccion" class="form-control" value="{{old('direccion')}}" pattern="[A-Z a-z]{1,100}" maxlength="100" required>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="pais_nacimiento">Pais de Nacimiento</label>
					<input type="text" name="pais_nacimiento" class="form-control" value="{{old('pais_nacimiento')}}" pattern="[A-Z a-z]{1,100}" maxlength="100" required>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="estado">Estado</label>
					<input type="text" name="estado" class="form-control" value="{{old('estado')}}" pattern="[A-Z a-z]{1,100}" maxlength="100" required>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="nacionalidad">Nacionalidad</label>
					<input type="text" name="nacionalidad" class="form-control" value="{{old('nacionalidad')}}" pattern="[A-Z a-z]{1,100}" maxlength="100" required>
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