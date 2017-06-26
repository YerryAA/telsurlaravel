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
			{!!Form::model($antecedentes,['method'=>'PATCH','route'=>['instituto.antecedentes.update',$antecedentes->idantecedentes]])!!}
			{{Form::token()}}

			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label>Estudiante</label>
						<select name="iddatos_estudiantes" class="form-control">
							@foreach ($estudiantes as $es)
								@if ($es->iddatos_estudiantes==$antecedentes->idantecedentes)
									<option value="{{$es->iddatos_estudiantes}}" selected>{{$es->nombres}}</option>
								@endif
							@endforeach
						</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="tipo_embarazo">Tipo de Embarazo</label>
					<input type="text" name="tipo_embarazo" class="form-control" value="{{$antecedentes->tipo_embarazo}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="tipo_parto">Tipo de Parto</label>
					<input type="text" name="tipo_parto" class="form-control" value="{{$antecedentes->tipo_parto}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="desarrollo_psicomotor">Desarrollo Psicomotor</label>
					<input type="text" name="desarrollo_psicomotor" class="form-control" value="{{$antecedentes->desarrollo_psicomotor}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="desarrollo_lenguaje">Desarrollo Lenguaje</label>
					<input type="text" name="desarrollo_lenguaje" class="form-control" value="{{$antecedentes->desarrollo_lenguaje}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="primeras_palabras">Primeras Palabras</label>
					<input type="text" name="primeras_palabras" class="form-control" value="{{$antecedentes->primeras_palabras}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="edad_primeraspalabras">Edad de Primera Palabras</label>
					<input type="text" name="edad_primeraspalabras" class="form-control" value="{{$antecedentes->edad_primeraspalabras}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="antecedentes_saludge">Antecedentes Salud G.</label>
					<input type="text" name="antecedentes_saludge" class="form-control" value="{{$antecedentes->antecedentes_saludge}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="antecedentes_saluds">Antecedentes Salud S.</label>
					<input type="text" name="antecedentes_saluds" class="form-control" value="{{$antecedentes->antecedentes_saluds}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="personalidad">Personalidad</label>
					<input type="text" name="personalidad" class="form-control" value="{{$antecedentes->personalidad}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="quejas">Quejas</label>
					<input type="text" name="quejas" class="form-control" value="{{$antecedentes->quejas}}">
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