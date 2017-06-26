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
					{!!Form::open(array('url'=>'instituto/antecedentes','method'=>'POST','autocomplete'=>'off')) !!}
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
					<label for="tipo_embarazo">Tipo de Embarazo</label>
					<input type="text" name="tipo_embarazo" class="form-control" value="{{old('tipo_embarazo')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="tipo_parto">Tipo de Parto</label>
					<input type="text" name="tipo_parto" class="form-control" value="{{old('tipo_parto')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="desarrollo_psicomotor">Desarrollo Psicomotor</label>
					<input type="text" name="desarrollo_psicomotor" class="form-control" value="{{old('desarrollo_psicomotor')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="desarrollo_lenguaje">Desarrollo Lenguaje</label>
					<input type="text" name="desarrollo_lenguaje" class="form-control" value="{{old('desarrollo_lenguaje')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="primeras_palabras">Primeras Palabras</label>
					<input type="text" name="primeras_palabras" class="form-control" value="{{old('primeras_palabras')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="edad_primeraspalabras">Edad de Primera Palabras</label>
					<input type="text" name="edad_primeraspalabras" class="form-control" value="{{old('edad_primeraspalabras')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="antecedentes_saludge">Antecedentes Salud G.</label>
					<input type="text" name="antecedentes_saludge" class="form-control" value="{{old('antecedentes_saludge')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="antecedentes_saluds">Antecedentes Salud S.</label>
					<input type="text" name="antecedentes_saluds" class="form-control" value="{{old('antecedentes_saluds')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="personalidad">Personalidad</label>
					<input type="text" name="personalidad" class="form-control" value="{{old('personalidad')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="quejas">Quejas</label>
					<input type="text" name="quejas" class="form-control" value="{{old('quejas')}}">
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