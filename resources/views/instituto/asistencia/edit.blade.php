@extends ('layouts.admin') @section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6">
		<h3>Editar Empleado</h3> @if (count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		{!!Form::model($asistencia,['method'=>'PATCH','route'=>['instituto.asistencia.update',$asistencia->idasistencia]])!!}
		{{Form::token()}}

		
			<div class="form-group">
				<label>Empleado</label>
				<select name="idempleado" class="form-control">
					@foreach ($empleados as $emp)
					@if ($emp->idempleado==$asistencia->idempleado)
					<option value="{{$emp->idempleado}}" selected>{{$emp->empleado_nombre}}</option>
					@endif @endforeach
				</select>
			</div>
		
			<div class="form-group">
				<label for="hora_entrada">Hora Entrada</label>
				<select name="hora_entrada" class="form-control" required>
					@if($asistencia->hora_entrada=='6:00am')
					<option name="6:00am" value="6:00am" selected>6:00am</option>
					<option name="7:00am" value="7:00am">7:00am</option>
					<option name="8:00am" value="8:00am">8:00am</option>
					<option name="9:00am" value="9:00am">9:00am</option>
					<option name="10:00am" value="10:00am">10:00am</option>
					<option name="11:00am" value="11:00am">11:00am</option>

					@elseif($asistencia->hora_entrada=='7:00am')
					<option name="6:00am" value="6:00am">6:00am</option>
					<option name="7:00am" value="7:00am" selected>7:00am</option>
					<option name="8:00am" value="8:00am">8:00am</option>
					<option name="9:00am" value="9:00am">9:00am</option>
					<option name="10:00am" value="10:00am">10:00am</option>
					<option name="11:00am" value="11:00am">11:00am</option>

					@elseif($asistencia->hora_entrada=='8:00am')
					<option name="6:00am" value="6:00am">6:00am</option>
					<option name="7:00am" value="7:00am">7:00am</option>
					<option name="8:00am" value="8:00am" selected>8:00am</option>
					<option name="9:00am" value="9:00am">9:00am</option>
					<option name="10:00am" value="10:00am">10:00am</option>
					<option name="11:00am" value="11:00am">11:00am</option>

					@elseif($asistencia->hora_entrada=='9:00am')
					<option name="6:00am" value="6:00am">6:00am</option>
					<option name="7:00am" value="7:00am">7:00am</option>
					<option name="8:00am" value="8:00am">8:00am</option>
					<option name="9:00am" value="9:00am" selected>9:00am</option>
					<option name="10:00am" value="10:00am">10:00am</option>
					<option name="11:00am" value="11:00am">11:00am</option>

					@elseif($asistencia->hora_entrada=='10:00am')
					<option name="6:00am" value="6:00am">6:00am</option>
					<option name="7:00am" value="7:00am">7:00am</option>
					<option name="8:00am" value="8:00am">8:00am</option>
					<option name="9:00am" value="9:00am">9:00am</option>
					<option name="10:00am" value="10:00am" selected>10:00am</option>
					<option name="11:00am" value="11:00am">11:00am</option>

					@else
					<option name="6:00am" value="6:00am">6:00am</option>
					<option name="7:00am" value="7:00am">7:00am</option>
					<option name="8:00am" value="8:00am">8:00am</option>
					<option name="9:00am" value="9:00am">9:00am</option>
					<option name="10:00am" value="10:00am">10:00am</option>
					<option name="11:00am" value="11:00am" selected>11:00am</option>

					@endif
				</select>
			</div>
		
		
			<div class="form-group">
				<label for="hora_salida">Hora Salida</label>
				<select name="hora_salida" class="form-control" required>
					@if($asistencia->hora_salida=='8:00am')
					<option name="6:00am" value="6:00am">6:00am</option>
					<option name="7:00am" value="7:00am">7:00am</option>
					<option name="8:00am" value="8:00am" selected>8:00am</option>
					<option name="9:00am" value="9:00am">9:00am</option>
					<option name="10:00am" value="10:00am">10:00am</option>
					<option name="11:00am" value="11:00am">11:00am</option>

					@elseif($asistencia->hora_salida=='9:00am')
					<option name="6:00am" value="6:00am">6:00am</option>
					<option name="7:00am" value="7:00am">7:00am</option>
					<option name="8:00am" value="8:00am">8:00am</option>
					<option name="9:00am" value="9:00am" selected>9:00am</option>
					<option name="10:00am" value="10:00am">10:00am</option>
					<option name="11:00am" value="11:00am">11:00am</option>

					@elseif($asistencia->hora_salida=='10:00am')
					<option name="6:00am" value="6:00am">6:00am</option>
					<option name="7:00am" value="7:00am">7:00am</option>
					<option name="8:00am" value="8:00am">8:00am</option>
					<option name="9:00am" value="9:00am">9:00am</option>
					<option name="10:00am" value="10:00am" selected>10:00am</option>
					<option name="11:00am" value="11:00am">11:00am</option>

					@else
					<option name="6:00am" value="6:00am">6:00am</option>
					<option name="7:00am" value="7:00am">7:00am</option>
					<option name="8:00am" value="8:00am">8:00am</option>
					<option name="9:00am" value="9:00am">9:00am</option>
					<option name="10:00am" value="10:00am">10:00am</option>
					<option name="11:00am" value="11:00am" selected>11:00am</option>

					@endif
				</select>
			</div>
		
			<div class="form-group">
				<label for="suplente">Suplente</label>
				<select name="suplente" class="form-control" required>
					@if($asistencia->suplente=='Si')
					<option value="Si" name="Si" selected>Si</option>
					<option value="No" name="No">No</option>
					@else
					<option value="Si" name="Si">Si</option>
					<option value="No" name="No" selected>No</option>
					@endif
				</select>
			</div>
		
			<div class="form-group">
				<label for="observacion">Observacion</label>
				<input type="text" name="observacion" required value="{{$asistencia->observacion}}" class="form-control" pattern="[A-Z a-z]{1,100}" maxlength="100">
			</div>
	
			<div class="form-group">
				<label for="retardo">Retardo</label>
				<select name="retardo" class="form-control" required>
					@if($asistencia->retardo=='Si')
					<option value="Si" name="Si" selected>Si</option>
					<option value="No" name="No">No</option>
					@else
					<option value="Si" name="Si">Si</option>
					<option value="No" name="No" selected>No</option>
					@endif
				</select>
			</div>
		
			<div class="form-group">
				<label for="permiso_personal">Permiso Personal</label>
				<select name="permiso_personal" class="form-control" required>
					@if($asistencia->permiso_personal=='Si')
					<option value="Si" name="Si" selected>Si</option>
					<option value="No" name="No">No</option>
					@else
					<option value="Si" name="Si">Si</option>
					<option value="No" name="No" selected>No</option>
					@endif
				</select>
			</div>
		
			<div class="form-group">
				<label for="permiso_justificado">Permiso Justificado</label>
				<select name="permiso_justificado" class="form-control" required>
					@if($asistencia->permiso_justificado=='Si')
					<option value="Si" name="Si" selected>Si</option>
					<option value="No" name="No">No</option>
					@else
					<option value="Si" name="Si">Si</option>
					<option value="No" name="No" selected>No</option>
					@endif
				</select>
			</div>
		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<button class="btn btn-danger" type="reset">Cancelar</button>
		</div>

		{{Form::close()}}
	</div>
</div>
@endsection