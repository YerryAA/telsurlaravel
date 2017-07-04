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
								<input type="text" name="empleado_nombre" required value="{{old('empleado_nombre')}}" class="form-control" placeholder="Nombres..." pattern="[A-Z a-z]{1,100}" maxlength="100">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<label for="empleado_apellidos">Apellidos</label>
								<input type="text" name="empleado_apellido" required value="{{old('empleado_apellido')}}" class="form-control" placeholder="Apellido..." pattern="[A-Z a-z]{1,100}" maxlength="100">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<label for="empleado_cedula">Cedula</label>
								<input type="text" name="empleado_cedula" required value="{{old('empleado_cedula')}}" class="form-control" placeholder="Cedula..." pattern="[1-9]{1,9}">
						</div>	
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<label for="empleado_horario">Horario</label>
								<select name="empleado_horario" class="form-control">
									<option value="Seleccione">Seleccione</option>
									<option value="6:00am - 12:00pm" name="6:00am - 12:00pm">6:00am - 12:00pm</option>
									<option value="7:00am - 12:00pm" name="7:00am - 12:00pm">7:00am - 12:00pm</option>
								</select>
						</div>	
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<label for="empleado_estatus">Estatus</label>
								<select name="empleado_estatus" class="form-control">
									<option value="Seleccione">Seleccione</option>
									<option value="Activo" name="Activo">Activo</option>
									<option value="Inactivo" name="Inactivo">Inactivo</option>				
								</select>
						</div>	
					</div>
					<div class="col-lg-6 col-sm-6">
						<div class="form-group">
							<label for="empleado_cargo">Cargo</label>
							<select name="empleado_cargo" class="form-control">
								<option value="Seleccione" name="">Seleccione</option>
								<option name="Administrativo" value="Administrativo">Administrativo</option>
								<option name="Docente" value="Docente">Docente</option>
								<option name="Obrero" value="Obrero">Obrero</option>
							</select>
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