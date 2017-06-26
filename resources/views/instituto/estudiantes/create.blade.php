@extends ('layouts.admin')
@section ('contenido')
	<div class="tab-pane fade in">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					{!!Form::open(array('url'=>'instituto/estudiantes','method'=>'POST','autocomplete'=>'off')) !!}
					{{Form::token()}}
					<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Tipo de Inscripcion</label>
									<select name="idtipo_inscripcion" class="form-control">
										@foreach ($tipo_inscripcion as $ti)
											<option value="{{$ti->idtipo_inscripcion}}">{{$ti->tipo_inscripcion}}</option>
										@endforeach
									</select>
							</div>
						</div>
					<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="nombres">Nombres</label>
					<input type="text" name="nombres" class="form-control" value="{{old('nombres')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="apellidos">Apellido</label>
					<input type="text" name="apellidos" class="form-control" value="{{old('apellidos')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="cedula">Cedula</label>
					<input type="text" name="cedula" class="form-control" value="{{old('cedula')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="genero">Genero</label>
					<input type="text" name="genero" class="form-control" value="{{old('genero')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="fecha_nacimiento">Fecha de Nacimiento</label>
					<input type="text" name="fecha_nacimiento" class="form-control" value="{{old('fecha_nacimiento')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="edad">Edad</label>
					<input type="text" name="edad" class="form-control" value="{{old('edad')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="anos_calificacion">Años de Calificacion</label>
					<input type="text" name="anos_calificacion" class="form-control" value="{{old('anos_calificacion')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="carnet">Carnet</label>
					<input type="text" name="carnet" class="form-control" value="{{old('carnet')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="becado">Becado</label>
					<input type="text" name="becado" class="form-control" value="{{old('becado')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="tipo_organismo">Tipo de Organismo</label>
					<input type="text" name="tipo_organismo" class="form-control" value="{{old('tipo_organismo')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="posee_canaima">Posee Canaima</label>
					<input type="text" name="posee_canaima" class="form-control" value="{{old('posee_canaima')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="lateralidad">Lateralidad</label>
					<input type="text" name="lateralidad" class="form-control" value="{{old('lateralidad')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="orden_nacimiento">Orden Nacimiento</label>
					<input type="text" name="orden_nacimiento" class="form-control" value="{{old('orden_nacimiento')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="esterilizado">Esterilizado</label>
					<input type="text" name="esterilizado" class="form-control" value="{{old('esterilizado')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="hijos">Hijos</label>
					<input type="text" name="hijos" class="form-control" value="{{old('hijos')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="dieta">Dieta</label>
					<input type="text" name="dieta" class="form-control" value="{{old('dieta')}}">
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