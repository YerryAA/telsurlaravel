@extends ('layouts.admin')
@section ('contenido')
	<div class="tab-pane fade in">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					{!!Form::open(array('url'=>'instituto/asistencia','method'=>'POST','autocomplete'=>'off')) !!}
					{{Form::token()}}
					<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Empleado</label>
									<select name="idempleado" class="form-control">
										@foreach ($empleados as $emp)
											<option value="{{$emp->idempleado}}">{{$emp->empleado_nombre}}</option>
										@endforeach
									</select>
							</div>
						</div>
					<div class="row">
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
									<label for="hora_entrada">Hora Entrada</label>
									<select name="hora_entrada" class="form-control" required>
										<option>Selecione</option>
										<option name="6:00am" value="6:00am">6:00am</option>
										<option name="7:00am" value="7:00am">7:00am</option>
										<option name="8:00am" value="8:00am">8:00am</option>
										<option name="9:00am" value="9:00am">9:00am</option>
										<option name="10:00am" value="10:00am">10:00am</option>
										<option name="11:00am" value="11:00am">11:00am</option>
									</select>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
									<label for="hora_salida">Hora Salida</label>
									<select name="hora_salida" class="form-control" required>
										<option>Selecione</option>
										<option name="8:00am" value="8:00am">8:00am</option>
										<option name="9:00am" value="9:00am">9:00am</option>
										<option name="10:00am" value="10:00am">10:00am</option>
										<option name="11:00am" value="11:00am">11:00am</option>
										<option name="12:00pm" value="12:00pm">12:00pm</option>
										<option name="1:00pm" value="1:00pm">1:00pm</option>
									</select>
							</div>
						</div>
						
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label for="suplente">Suplente</label>
								<select name="suplente" class="form-control" required>
									<option>Selecione</option>
									<option value="Si" name="Si">Si</option>
									<option value="No" name="No">No</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label for="observacion">Observacion</label>
									<input type="text" name="observacion" required value="{{old('observacion')}}" class="form-control" placeholder="Observacion del empleado..." pattern="[A-Z a-z]{1,100}" maxlength="100">
							</div>	
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label for="retardo">Retardo</label>
								<select name="retardo" class="form-control" required>
									<option>Selecione</option>
									<option value="Si" name="Si">Si</option>
									<option value="No" name="No">No</option>
								</select>
							</div>	
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label for="permiso_personal">Permiso Personal</label>
								<select name="permiso_personal" class="form-control" required>
									<option>Selecione</option>
									<option value="Si" name="Si">Si</option>
									<option value="No" name="No">No</option>
								</select>
							</div>	
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label for="permiso_justificado">Permiso Justificado</label>
								<select name="permiso_justificado" class="form-control" required>
									<option>Selecione</option>
									<option value="Si" name="Si">Si</option>
									<option value="No" name="No">No</option>
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