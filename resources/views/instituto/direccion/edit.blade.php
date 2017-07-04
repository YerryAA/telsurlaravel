@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-6">
			<h3>Editar Estudiante</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			{!!Form::model($direccion,['method'=>'PATCH','route'=>['instituto.direccion.update',$direccion->iddireccion]])!!}
			{{Form::token()}}

			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label>Estudiante</label>
						<select name="iddatos_estudiantes" class="form-control">
							@foreach ($estudiantes as $es)
								@if ($es->iddatos_estudiantes==$direccion->iddireccion)
									<option value="{{$es->iddatos_estudiantes}}" selected>{{$es->nombres}}</option>
								@endif
							@endforeach
						</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="direccion">Direccion del Estudiantes</label>
					<input type="text" name="direccion" class="form-control" value="{{$direccion->direccion}}" pattern="[A-Z a-z]{1,100}" maxlength="100" required>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="pais_nacimiento">Pais de Nacimiento</label>
					<input type="text" name="pais_nacimiento" class="form-control" value="{{$direccion->pais_nacimiento}}" pattern="[A-Z a-z]{1,100}" maxlength="100" required>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="estado">Estado</label>
					<input type="text" name="estado" class="form-control" value="{{$direccion->estado}}" pattern="[A-Z a-z]{1,100}" maxlength="100" required>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="nacionalidad">Nacionalidad</label>
					<input type="text" name="nacionalidad" class="form-control" value="{{$direccion->nacionalidad}}" pattern="[A-Z a-z]{1,100}" maxlength="100" required>
				</div>
			</div>
			
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
			</div>
			
			{{Form::close()}}
		</div>
	</div>	
@endsection