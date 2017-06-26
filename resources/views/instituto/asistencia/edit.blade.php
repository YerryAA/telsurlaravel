@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<h3>Editar Empleado</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			{!!Form::model($asistencia,['method'=>'PATCH','route'=>['instituto.asistencia.update',$asistencia->idempleado]])!!}
			{{Form::token()}}

			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label>Empleado</label>
						<select name="idempleado" class="form-control">
							@foreach ($empleados as $emp)
								@if ($emp->idempleado==$asistencia->idempleado)
									<option value="{{$emp->idempleado}}" selected>{{$emp->empleado_nombre}}</option>
								@endif
							@endforeach
						</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="hora_entrada">Hora de Entrada</label>
					<input type="text" name="hora_entrada" class="form-control" value="{{$asistencia->hora_entrada}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="hora_salida">Hora de Salida</label>
					<input type="text" name="hora_salida" class="form-control" value="{{$asistencia->hora_salida}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="suplente">Suplente</label>
					<input type="text" name="suplente" class="form-control" value="{{$asistencia->suplente}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="observacion">Observacion</label>
					<input type="text" name="observacion" class="form-control" value="{{$asistencia->observacion}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="retardo">Retardo</label>
					<input type="text" name="retardo" class="form-control" value="{{$asistencia->retardo}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="permiso_personal">Permiso Personal</label>
					<input type="text" name="permiso_personal" class="form-control" value="{{$asistencia->permiso_personal}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="permiso_justificado">Permiso Justificado</label>
					<input type="text" name="permiso_justificado" class="form-control" value="{{$asistencia->permiso_justificado}}">
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