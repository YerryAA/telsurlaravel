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
					<select name="tipo_embarazo" class="form-control">
						<option>Seleccione...</option>
						<option name="Deseado" value="Deseado">Deseado</option>
						<option name="No Deseado" value="No Deseado">No Deseado</option>
						<option name="Controlado" value="Controlado">Controlado</option>
						<option name="Anticonceptivos" value="Anticonceptivos">Anticonceptivos</option>
						<option name="Sintomas de Aborto" value="Sintomas de Aborto">Sintomas de Aborto</option>
						<option name="Enfermedades Infecciosas" value="Enfermedades Infecciosas">Enfermedades Infecciosas</option>
						<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
						<option name="Vomitos" value="Vomitos">Vomitos</option>
						<option name="Otros" value="Otros">Otros</option>
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="tipo_parto">Tipo de Parto</label>
					<select name="tipo_parto" class="form-control">
						<option>Seleccione...</option>
						<option name="Rapido" value="Rapido">Rapido</option>
						<option name="Lento" value="Lento">Lento</option>
						<option name="Normal" value="Normal">Normal</option>
						<option name="Inducido" value="Inducido">Inducido</option>
						<option name="Mecanico" value="Mecanico">Mecanico</option>
						<option name="Cesaria" value="Cesaria">Cesaria</option>
						<option name="Presentacion Encefalica" value="Presentacion Encefalica">Presentacion Encefalica</option>
						<option name="Podalico de Nalgas" value="Podalico de Nalgas">Podalico de Nalgas</option>
						<option name="Circular del Cordon" value="Circular del Cordon">Circular del Cordon</option>
						<option name="Llanto al Nacer" value="Llanto al Nacer">Llanto al Nacer</option>
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="desarrollo_psicomotor">Desarrollo Psicomotor</label>
					<select name="desarrollo_psicomotor" class="form-control">
						<option>Seleccione...</option>
						<option name="Fijo la Cabeza" value="Fijo la Cabeza">Fijo la Cabeza</option>
						<option name="Se Sento" value="Se Sento">Se Sento</option>
						<option name="Gateo" value="Gateo">Gateo</option>
						<option name="Camino Apoyado" value="Camino Apoyado">Camino Apoyado</option>
						<option name="Camino Solo" value="Camino Solo">Camino Solo</option>
						<option name="Se Vistio Solo" value="Se Vistio Solo">Se Vistio Solo</option>
						<option name="Control de Esfinteres" value="Control de Esfinteres">Control de Esfinteres</option>
					</select>
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
					<select name="antecedentes_saludge" class="form-control">
						<option>Seleccione...</option>
						<option name="Sarampion" value="Sarampion">Sarampion</option>
						<option name="Rubeola" value="Rubeola">Rubeola</option>
						<option name="Tos Ferina" value="Tos Ferina">Tos Ferina</option>
						<option name="Paperas" value="Paperas">Paperas</option>
						<option name="Lechina" value="Lechina">Lechina</option>
						<option name="Asma" value="Asma">Asma</option>
						<option name="Alergias" value="Alergias">Alergias</option>
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="antecedentes_saluds">Antecedentes Salud S.</label>
					<select name="antecedentes_saluds" class="form-control">
						<option>Seleccione...</option>
						<option name="Meningitis" value="Meningitis">Meningitis</option>
						<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
						<option name="Otitis Cronica" value="Otitis Cronica">Otitis Cronica</option>
						<option name="Traumatismos" value="Traumatismos">Traumatismos</option>
						<option name="Cardiopatias" value="Cardiopatias">Cardiopatias</option>
						<option name="Epilepsia" value="Epilepsia">Epilepsia</option>
						<option name="Otros" value="Otros">Otros</option>
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="personalidad">Personalidad</label>
					<select name="personalidad" class="form-control">
						<option>Seleccione...</option>
						<option name="Sociable" value="Sociable">Sociable</option>
						<option name="Llora Mucho" value="Llora Mucho">Llora Mucho</option>
						<option name="Dependiente" value="Dependiente">Dependiente</option>
						<option name="Aprensivo" value="Aprensivo">Aprensivo</option>
						<option name="Teme al Castigo" value="Teme al Castigo">Teme al Castigo</option>
						<option name="Destructivo" value="Destructivo">Destructivo</option>
						<option name="Tiene Fobias" value="Tiene Fobias">Tiene Fobias</option>
						<option name="Timido" value="Timido">Timido</option>
						<option name="Obsesivo" value="Obsesivo">Obsesivo</option>
						<option name="Sensible" value="Sensible">Sensible</option>
						<option name="Apatico" value="Apatico">Apatico</option>
						<option name="Se Concentra" value="Se Concentra">Se Concentra</option>
						<option name="Se Desanima" value="Se Desanima">Se Desanima</option>
					</select>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="quejas">Quejas</label>
					<select name="quejas" class="form-control">
						<option>Seleccione...</option>
						<option name="Dolor de Cabeza" value="Dolor de Cabeza">Dolor de Cabeza</option>
						<option name="Mareos" value="Mareos">Mareos</option>
						<option name="Vomitos" value="Vomitos">Vomitos</option>
						<option name="Falta de Apetito" value="Falta de Apetito">Falta de Apetito</option>
						<option name="Glotoneria" value="Glotoneria">Glotoneria</option>
						<option name="Ecopresis Diurna" value="Ecopresis Diurna">Ecopresis Diurna</option>
						<option name="Enuresis Diurna" value="Enuresis Diurna">Enuresis Diurna</option>
						<option name="Teme a los Animales" value="Teme a los Animales">Teme a los Animales</option>
						<option name="Teme a Examenes" value="Teme a Examenes">Teme a Examenes</option>
						<option name="Teme a Exposiciones" value="Teme a Exposiciones">Teme a Exposiciones</option>
						<option name="Teme a los Maestros" value="Teme a los Maestros">Teme a los Maestros</option>
						<option name="Terror Nocturno" value="Terror Nocturno">Terror Nocturno</option>
						<option name="Teme Quedarse Solo" value="Teme Quedarse Solo">Teme Quedarse Solo</option>
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