@extends ('layouts.admin')
@section ('contenido')
	<div class="tab-pane fade in">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					{!!Form::open(array('url'=>'instituto/empleado','method'=>'POST','autocomplete'=>'off')) !!}
					{{Form::token()}}
					<div class="row">
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
								<label for="empleado_nombre">Nombres</label>
								<input type="text" name="empleado_nombre" required value="{{old('empleado_nombre')}}" class="form-control" placeholder="Nombres...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<label for="empleado_apellidos">Apellidos</label>
								<input type="text" name="empleado_apellido" required value="{{old('empleado_apellido')}}" class="form-control" placeholder="Apellido...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<label for="empleado_cedula">Cedula</label>
								<input type="text" name="empleado_cedula" required value="{{old('empleado_cedula')}}" class="form-control" placeholder="Cedula...">
						</div>	
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<label for="empleado_horario">Horario</label>
								<input type="text" name="empleado_horario" required value="{{old('empleado_horario')}}" class="form-control" placeholder="Horario...">
						</div>	
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<label for="empleado_estatus">Estatus</label>
								<input type="text" name="empleado_estatus" required value="{{old('empleado_estatus')}}" class="form-control" placeholder="Estatus...">
						</div>	
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<label for="empleado_cargo">Cargo</label>
								<input type="text" name="empleado_cargo" required value="{{old('empleado_cargo')}}" class="form-control" placeholder="Cargo...">
						</div>	
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<button class="btn btn-danger" type="reset">Cancelar</button>
						</div>
					</div>
				</div>
				{!!Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection 