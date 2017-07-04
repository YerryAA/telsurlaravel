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
			{!!Form::model($discapacidad,['method'=>'PATCH','route'=>['instituto.discapacidades.update',$discapacidad->iddiscapacidad]])!!}
			{{Form::token()}}

			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label>Estudiante</label>
						<select name="iddatos_estudiantes" class="form-control">
							@foreach ($estudiantes as $es)
								@if ($es->iddatos_estudiantes==$discapacidad->iddiscapacidad)
									<option value="{{$es->iddatos_estudiantes}}" selected>{{$es->nombres}}</option>
								@endif
							@endforeach
						</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="discapacidad_nombre">Nombre de Discapacidad</label>
					<input type="text" name="discapacidad_nombre" class="form-control" value="{{$discapacidad->discapacidad_nombre}}" pattern="[A-Z a-z]{1,100}" maxlength="100">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="convulsiona">Convulsiona</label>
					<select name="convulsiona" class="form-control" required>
						@if($discapacidad->convulsiona=='Si')
						<option value="Si" name="Si" selected>Si</option>
						<option value="No" name="No">No</option>
						@else
						<option value="Si" name="Si">Si</option>
						<option value="No" name="No" selected>No</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="alergico">Alergico</label>
					<select name="alergico" class="form-control" required>
						@if($discapacidad->alergico=='Si')
						<option value="Si" name="Si" selected>Si</option>
						<option value="No" name="No">No</option>
						@else
						<option value="Si" name="Si">Si</option>
						<option value="No" name="No" selected>No</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="toma_medicamento">Toma Medicamento</label>
					<select name="toma_medicamento" class="form-control" required>
						@if($discapacidad->toma_medicamento=='Si')
						<option value="Si" name="Si" selected>Si</option>
						<option value="No" name="No">No</option>
						@else
						<option value="Si" name="Si">Si</option>
						<option value="No" name="No" selected>No</option>
						@endif
					</select>
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