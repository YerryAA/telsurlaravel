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
									<input type="text" name="hora_entrada" required value="{{old('hora_entrada')}}" class="form-control" placeholder="Hora Entrada...">
							</div>
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
									<label for="hora_salida">Hora Salida</label>
									<input type="text" name="hora_salida" required value="{{old('hora_salida')}}" class="form-control" placeholder="Hora Salida...">
							</div>
						</div>
						
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label for="suplente">Suplente</label>
									<input type="text" name="suplente" required value="{{old('suplente')}}" class="form-control" placeholder="Suplente...">
							</div>
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label for="observacion">Observacion</label>
									<input type="text" name="observacion" required value="{{old('observacion')}}" class="form-control" placeholder="Observacion del articulo...">
							</div>	
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label for="retardo">Retardo</label>
									<input type="text" name="retardo" value="{{old('retardo')}}" class="form-control" placeholder="Retardo...">
							</div>	
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label for="permiso_personal">Permiso Personal</label>
									<input type="text" name="permiso_personal" value="{{old('permiso_personal')}}" class="form-control" placeholder="Permiso Personal...">
							</div>	
						</div>
						<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label for="permiso_justificado">Permiso Justificado</label>
									<input type="text" name="permiso_justificado" value="{{old('permiso_justificado')}}" class="form-control" placeholder="Permiso Justificado...">
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