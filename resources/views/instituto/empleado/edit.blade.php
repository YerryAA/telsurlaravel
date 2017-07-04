@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<h3>Editar Empleado: {{$empleado->empleado_nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			{!!Form::model($empleado,['method'=>'PATCH','route'=>['instituto.empleado.update',$empleado->idempleado]])!!}
			{{Form::token()}}
			<div class="form-group">
				<label for="empleado_nombre">Nombres</label>
				<input type="text" name="empleado_nombre" class="form-control" value="{{$empleado->empleado_nombre}}" pattern="[A-Z a-z]{1,100}" maxlength="100">
			</div>
			<div class="form-group">
				<label for="empleado_apellido">Apellidos</label>
				<input type="text" name="empleado_apellido" class="form-control" value="{{$empleado->empleado_apellido}}" pattern="[A-Z a-z]{1,100}" maxlength="100">
			</div>
			<div class="form-group">
				<label for="empleado_cedula">Cedula</label>
				<input type="text" name="empleado_cedula" class="form-control" value="{{$empleado->empleado_cedula}}" pattern="[0-9]{1,9}">
			</div>
			<div class="form-group">
				<label for="empleado_horario">Horario</label>
				<select name="empleado_horario" class="form-control">
					@if($empleado->empleado_horario=='6:00am - 12:00pm')
					<option value="6:00am - 12:00pm" name="6:00am - 12:00pm" selected>6:00am - 12:00pm</option>
					<option value="7:00am - 12:00pm" name="7:00am - 12:00pm">7:00am - 12:00pm</option>
					@else
					<option value="6:00am - 12:00pm" name="6:00am - 12:00pm">6:00am - 12:00pm</option>
					<option value="7:00am - 12:00pm" name="7:00am - 12:00pm" selected>7:00am - 12:00pm</option>
					@endif
				</select>
						
			</div>
			<div class="form-group">
				<label for="empleado_estatus">Estatus</label>
					<select name="empleado_estatus" class="form-control">
						@if($empleado->empleado_estatus=='Activo')
						<option value="Activo" name="Activo" selected>Activo</option>
						<option value="Inactivo" name="Inactivo">Inactivo</option>
						@else
						<option value="Activo" name="Activo">Activo</option>
						<option value="Inactivo" name="Inactivo" selected>Inactivo</option>
						@endif
					</select>
			</div>
			<div class="form-group">
				<label for="empleado_cargo">Cargo</label>
				<select name="empleado_cargo" class="form-control">
					@if($empleado->empleado_cargo=='Administrativo')
					<option value="Administrativo" name="Administrativo" selected>Administrativo</option>
					<option value="Docente" name="Docente">Docente</option>
					<option value="Obrero" name="Obrero">Obrero</option>
					@elseif($empleado->empleado_cargo=='Docente')
					<option value="Administrativo" name="Administrativo">Administrativo</option>
					<option value="Docente" name="Docente" selected>Docente</option>
					<option value="Obrero" name="Obrero">Obrero</option>
					@else
					<option value="Administrativo" name="Administrativo">Administrativo</option>
					<option value="Docente" name="Docente">Docente</option>
					<option value="Obrero" name="Obrero" selected>Obrero</option>
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