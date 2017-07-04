@extends ('layouts.admin')
@section ('contenido')
@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
	<div class="tab-pane fade in">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					{!!Form::open(array('url'=>'instituto/discapacidades','method'=>'POST','autocomplete'=>'off')) !!}
					{{Form::token()}}
					<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Estudiante</label>
									<select name="iddatos_estudiantes" class="form-control">
										@foreach ($datos_estudiantes as $ti)
											<option value="{{$ti->iddatos_estudiantes}}">{{$ti->nombres}}</option>
										@endforeach
									</select>
							</div>
						</div>
					<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="discapacidad_nombre">Nombre de la Discapacidad</label>
					<input type="text" name="discapacidad_nombre" class="form-control" value="{{old('discapacidad_nombre')}}" pattern="[A-Z a-z]{1,100}" maxlength="100" required>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="convulsiona">Convulsiona</label>
					<select name="convulsiona" class="form-control">
						<option>Selecione</option>
						<option value="Si" name="Si">Si</option>
						<option value="No" name="No">No</option>
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="alergico">Alergico</label>
					<select name="alergico" class="form-control">
						<option>Selecione</option>
						<option value="Si" name="Si">Si</option>
						<option value="No" name="No">No</option>
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="toma_medicamento">Toma Medicamento</label>
					<select name="toma_medicamento" class="form-control">
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
				{!!Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection 