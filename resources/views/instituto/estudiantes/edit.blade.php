@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6">
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
			{!!Form::model($datos_estudiantes,['method'=>'PATCH','route'=>['instituto.estudiantes.update',$datos_estudiantes->iddatos_estudiantes]])!!}
			{{Form::token()}}

			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label>Tipo de Inscripcion</label>
						<select name="idtipo_inscripcion" class="form-control">
							@foreach ($tipo_inscripciones as $ti)
								@if ($ti->idtipo_inscripcion==$datos_estudiantes->idtipo_inscripcion)
									<option value="{{$ti->idtipo_inscripcion}}" selected>{{$ti->tipo_inscripcion}}</option>
								@else
									<option value="{{$ti->idtipo_inscripcion}}">{{$ti->tipo_inscripcion}}</option>
								@endif
							@endforeach
						</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="nombres">Nombres</label>
					<input type="text" name="nombres" class="form-control" value="{{$datos_estudiantes->nombres}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="apellidos">Apellido</label>
					<input type="text" name="apellidos" class="form-control" value="{{$datos_estudiantes->apellidos}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="cedula">Cedula</label>
					<input type="text" name="cedula" class="form-control" value="{{$datos_estudiantes->cedula}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="genero">Genero</label>
					<input type="text" name="genero" class="form-control" value="{{$datos_estudiantes->genero}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="fecha_nacimiento">Fecha de Nacimiento</label>
					<input type="text" name="fecha_nacimiento" class="form-control" value="{{$datos_estudiantes->fecha_nacimiento}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="edad">Edad</label>
					<input type="text" name="edad" class="form-control" value="{{$datos_estudiantes->edad}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="anos_calificacion">Años de Calificacion</label>
					<input type="text" name="anos_calificacion" class="form-control" value="{{$datos_estudiantes->anos_calificacion}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="carnet">Carnet</label>
					<input type="text" name="carnet" class="form-control" value="{{$datos_estudiantes->carnet}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="becado">Becado</label>
					<input type="text" name="becado" class="form-control" value="{{$datos_estudiantes->becado}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="tipo_organismo">Tipo de Organismo</label>
					<input type="text" name="tipo_organismo" class="form-control" value="{{$datos_estudiantes->tipo_organismo}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="posee_canaima">Posee Canaima</label>
					<input type="text" name="posee_canaima" class="form-control" value="{{$datos_estudiantes->posee_canaima}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="lateralidad">Lateralidad</label>
					<input type="text" name="lateralidad" class="form-control" value="{{$datos_estudiantes->lateralidad}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="orden_nacimiento">Orden Nacimiento</label>
					<input type="text" name="orden_nacimiento" class="form-control" value="{{$datos_estudiantes->orden_nacimiento}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="esterilizado">Esterilizado</label>
					<input type="text" name="esterilizado" class="form-control" value="{{$datos_estudiantes->esterilizado}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="hijos">Hijos</label>
					<input type="text" name="hijos" class="form-control" value="{{$datos_estudiantes->hijos}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="dieta">Dieta</label>
					<input type="text" name="dieta" class="form-control" value="{{$datos_estudiantes->dieta}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
			</div>
			{{Form::close()}}
		</div>
	</div>	
@endsection