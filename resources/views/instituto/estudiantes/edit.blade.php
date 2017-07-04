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
					<input type="text" name="nombres" class="form-control" value="{{$datos_estudiantes->nombres}}" pattern="[A-Z a-z]{1,100}" maxlength="100">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="apellidos">Apellido</label>
					<input type="text" name="apellidos" class="form-control" value="{{$datos_estudiantes->apellidos}}" pattern="[A-Z a-z]{1,100}" maxlength="100">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="cedula">Cedula</label>
					<input type="text" name="cedula" class="form-control" value="{{$datos_estudiantes->cedula}}" pattern="[1-9]{1,11}" maxlength="11">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="genero">Genero</label>
					<select name="genero" class="form-control">
					@if($datos_estudiantes->genero=='F')
					<option name="F" value="F" selected>F</option>
					<option name="M" value="M">M</option>
					@else
					<option name="F" value="F">F</option>
					<option name="M" value="M" selected>M</option>
					@endif
					</select>
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
					<select name="carnet" class="form-control" required>
						@if($datos_estudiantes->carnet=='Si')
						<option value="Si" name="Si" selected>Si</option>
						<option value="No" name="No">No</option>
						@else
						<option value="Si" name="Si">Si</option>
						<option value="No" name="No" selected>No</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="becado">Becado</label>
					<select name="becado" class="form-control" required>
						@if($datos_estudiantes->becado=='Si')
						<option value="Si" name="Si" selected>Si</option>
						<option value="No" name="No">No</option>
						@else
						<option value="Si" name="Si">Si</option>
						<option value="No" name="No" selected>No</option>
						@endif
					</select>
					
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
					<select name="posee_canaima" class="form-control" required>
						@if($datos_estudiantes->posee_canaima=='Si')
						<option value="Si" name="Si" selected>Si</option>
						<option value="No" name="No">No</option>
						@else
						<option value="Si" name="Si">Si</option>
						<option value="No" name="No" selected>No</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="lateralidad">Lateralidad</label>
					<select name="lateralidad" class="form-control" required>
						@if($datos_estudiantes->lateralidad=='Derecho')
						<option value="Derecho" name="Derecho" selected>Derecho</option>
						<option value="Izquierdo" name="Izquierdo">Izquierdo</option>
						@else
						<option value="Derecho" name="Derecho">Derecho</option>
						<option value="Izquierdo" name="Izquierdo" selected>Izquierdo</option>
						@endif
					</select>
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
					<select name="esterilizado" class="form-control" required>
						@if($datos_estudiantes->esterilizado=='Si')
						<option value="Si" name="Si" selected>Si</option>
						<option value="No" name="No">No</option>
						@else
						<option value="Si" name="Si">Si</option>
						<option value="No" name="No" selected>No</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="hijos">Hijos</label>
					<select name="hijos" class="form-control" required>
						@if($datos_estudiantes->hijos=='Si')
						<option value="Si" name="Si" selected>Si</option>
						<option value="No" name="No">No</option>
						@else
						<option value="Si" name="Si">Si</option>
						<option value="No" name="No" selected>No</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="dieta">Dieta</label>
					<select name="dieta" class="form-control" required>
						@if($datos_estudiantes->dieta=='Si')
						<option value="Si" name="Si" selected>Si</option>
						<option value="No" name="No">No</option>
						@else
						<option value="Si" name="Si">Si</option>
						<option value="No" name="No" selected>No</option>
						@endif
					</select>
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