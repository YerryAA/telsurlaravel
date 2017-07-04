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
			{!!Form::model($transporte,['method'=>'PATCH','route'=>['instituto.transporte.update',$transporte->idtransporte]])!!}
			{{Form::token()}}

			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label>Estudiante</label>
						<select name="iddatos_estudiantes" class="form-control">
							@foreach ($estudiantes as $es)
								@if ($es->iddatos_estudiantes==$transporte->idtransporte)
									<option value="{{$es->iddatos_estudiantes}}" selected>{{$es->nombres}}</option>
								@endif
							@endforeach
						</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="transporte_nombre">Nombre Transporte</label>
					<input type="text" name="transporte_nombre" class="form-control" value="{{$transporte->transporte_nombre}}" pattern="[A-Z a-z]{1,100}" maxlength="100">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="transporte_cedula">Cedula Transporte</label>
					<input type="text" name="transporte_cedula" class="form-control" value="{{$transporte->transporte_cedula}}" pattern="[0-9]{1,11}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="transporte_telefono">Transporte Telefono</label>
					<input type="text" name="transporte_telefono" class="form-control" value="{{$transporte->transporte_telefono}}" pattern="[0-9]{1,12}" maxlength="12">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="transporte_vehiculo">Transporte Vehiculo</label>
					<input type="text" name="transporte_vehiculo" class="form-control" value="{{$transporte->transporte_vehiculo}}" pattern="[A-Z a-z]{1,100}" maxlength="100">
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