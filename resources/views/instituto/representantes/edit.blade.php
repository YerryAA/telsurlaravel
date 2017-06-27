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
			{!!Form::model($representantes,['method'=>'PATCH','route'=>['instituto.representantes.update',$representantes->idrepresentantes]])!!}
			{{Form::token()}}

			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label>Estudiante</label>
						<select name="iddatos_estudiantes" class="form-control">
							@foreach ($estudiantes as $es)
								@if ($es->iddatos_estudiantes==$representantes->idrepresentantes)
									<option value="{{$es->iddatos_estudiantes}}" selected>{{$es->nombres}}</option>
								@endif
							@endforeach
						</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_nombre">Nombres</label>
					<input type="text" name="representantes_nombre" class="form-control" value="{{$representantes->representantes_nombre}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_apellido">Apellidos</label>
					<input type="text" name="representantes_apellido" class="form-control" value="{{$representantes->representantes_apellido}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_cedula">Cedula</label>
					<input type="text" name="representantes_cedula" class="form-control" value="{{$representantes->representantes_cedula}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_edad">Edad</label>
					<input type="text" name="representantes_edad" class="form-control" value="{{$representantes->representantes_edad}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_fechanacimiento">Fecha de Nacimiento</label>
					<input type="text" name="representantes_fechanacimiento" class="form-control" value="{{$representantes->representantes_fechanacimiento}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_paisnacimiento">Pais de Nacimiento</label>
					<input type="text" name="representantes_paisnacimiento" class="form-control" value="{{$representantes->representantes_paisnacimiento}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_nacionalidad">Nacionalidad</label>
					<input type="text" name="representantes_nacionalidad" class="form-control" value="{{$representantes->representantes_nacionalidad}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_direccion">Direccion</label>
					<input type="text" name="representantes_direccion" class="form-control" value="{{$representantes->representantes_direccion}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_parentesco">Parentesco</label>
					<input type="text" name="representantes_parentesco" class="form-control" value="{{$representantes->representantes_parentesco}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_ocupacion">Ocupacion</label>
					<input type="text" name="representantes_ocupacion" class="form-control" value="{{$representantes->representantes_ocupacion}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="representantes_direcionlaboral">Direccion Laboral</label>
					<input type="text" name="representantes_direcionlaboral" class="form-control" value="{{$representantes->representantes_direcionlaboral}}">
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