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
				<input type="text" name="empleado_nombre" class="form-control" value="{{$empleado->empleado_nombre}}">
			</div>
			<div class="form-group">
				<label for="empleado_apellido">Apellidos</label>
				<input type="text" name="empleado_apellido" class="form-control" value="{{$empleado->empleado_apellido}}">
			</div>
			<div class="form-group">
				<label for="empleado_cedula">Cedula</label>
				<input type="text" name="empleado_cedula" class="form-control" value="{{$empleado->empleado_cedula}}">
			</div>
			<div class="form-group">
				<label for="empleado_horario">Horario</label>
				<input type="text" name="empleado_horario" class="form-control" value="{{$empleado->empleado_horario}}">
			</div>
			<div class="form-group">
				<label for="empleado_estatus">Estatus</label>
				<input type="text" name="empleado_estatus" class="form-control" value="{{$empleado->empleado_estatus}}">
			</div>
			<div class="form-group">
				<label for="empleado_cargo">Cargo</label>
				<input type="text" name="empleado_cargo" class="form-control" value="{{$empleado->empleado_cargo}}">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			{{Form::close()}}
		</div>
	</div>	
@endsection