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
					<select name="tipo_embarazo" class="form-control">
						@if($antecedentes->tipo_embarazo=='Deseado')
							<option name="Deseado" value="Deseado" selected>Deseado</option>
							<option name="No Deseado" value="No Deseado">No Deseado</option>
							<option name="Controlado" value="Controlado">Controlado</option>
							<option name="Anticonceptivos" value="Anticonceptivos">Anticonceptivos</option>
							<option name="Sintomas de Aborto" value="Sintomas de Aborto">Sintomas de Aborto</option>
							<option name="Enfermedades Infecciosas" value="Enfermedades Infecciosas">Enfermedades Infecciosas</option>
							<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
							<option name="Vomitos" value="Vomitos">Vomitos</option>
							<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->tipo_embarazo=='No Deseado')
							<option name="Deseado" value="Deseado">Deseado</option>
							<option name="No Deseado" value="No Deseado" selected>No Deseado</option>
							<option name="Controlado" value="Controlado">Controlado</option>
							<option name="Anticonceptivos" value="Anticonceptivos">Anticonceptivos</option>
							<option name="Sintomas de Aborto" value="Sintomas de Aborto">Sintomas de Aborto</option>
							<option name="Enfermedades Infecciosas" value="Enfermedades Infecciosas">Enfermedades Infecciosas</option>
							<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
							<option name="Vomitos" value="Vomitos">Vomitos</option>
							<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->tipo_embarazo=='Controlado')
							<option name="Deseado" value="Deseado">Deseado</option>
							<option name="No Deseado" value="No Deseado">No Deseado</option>
							<option name="Controlado" value="Controlado" selected>Controlado</option>
							<option name="Anticonceptivos" value="Anticonceptivos">Anticonceptivos</option>
							<option name="Sintomas de Aborto" value="Sintomas de Aborto">Sintomas de Aborto</option>
							<option name="Enfermedades Infecciosas" value="Enfermedades Infecciosas">Enfermedades Infecciosas</option>
							<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
							<option name="Vomitos" value="Vomitos">Vomitos</option>
							<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->tipo_embarazo=='Anticonceptivos')
							<option name="Deseado" value="Deseado">Deseado</option>
							<option name="No Deseado" value="No Deseado">No Deseado</option>
							<option name="Controlado" value="Controlado">Controlado</option>
							<option name="Anticonceptivos" value="Anticonceptivos" selected>Anticonceptivos</option>
							<option name="Sintomas de Aborto" value="Sintomas de Aborto">Sintomas de Aborto</option>
							<option name="Enfermedades Infecciosas" value="Enfermedades Infecciosas">Enfermedades Infecciosas</option>
							<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
							<option name="Vomitos" value="Vomitos">Vomitos</option>
							<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->tipo_embarazo=='Sintomas de Aborto')
							<option name="Deseado" value="Deseado">Deseado</option>
							<option name="No Deseado" value="No Deseado">No Deseado</option>
							<option name="Controlado" value="Controlado">Controlado</option>
							<option name="Anticonceptivos" value="Anticonceptivos">Anticonceptivos</option>
							<option name="Sintomas de Aborto" value="Sintomas de Aborto" selected>Sintomas de Aborto</option>
							<option name="Enfermedades Infecciosas" value="Enfermedades Infecciosas">Enfermedades Infecciosas</option>
							<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
							<option name="Vomitos" value="Vomitos">Vomitos</option>
							<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->tipo_embarazo=='Enfermedades Infecciosas')
							<option name="Deseado" value="Deseado">Deseado</option>
							<option name="No Deseado" value="No Deseado">No Deseado</option>
							<option name="Controlado" value="Controlado">Controlado</option>
							<option name="Anticonceptivos" value="Anticonceptivos">Anticonceptivos</option>
							<option name="Sintomas de Aborto" value="Sintomas de Aborto">Sintomas de Aborto</option>
							<option name="Enfermedades Infecciosas" value="Enfermedades Infecciosas" selected>Enfermedades Infecciosas</option>
							<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
							<option name="Vomitos" value="Vomitos">Vomitos</option>
							<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->tipo_embarazo=='Convulsiones')
							<option name="Deseado" value="Deseado">Deseado</option>
							<option name="No Deseado" value="No Deseado">No Deseado</option>
							<option name="Controlado" value="Controlado">Controlado</option>
							<option name="Anticonceptivos" value="Anticonceptivos">Anticonceptivos</option>
							<option name="Sintomas de Aborto" value="Sintomas de Aborto">Sintomas de Aborto</option>
							<option name="Enfermedades Infecciosas" value="Enfermedades Infecciosas">Enfermedades Infecciosas</option>
							<option name="Convulsiones" value="Convulsiones" selected>Convulsiones</option>
							<option name="Vomitos" value="Vomitos">Vomitos</option>
							<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->tipo_embarazo=='Vomitos')
							<option name="Deseado" value="Deseado">Deseado</option>
							<option name="No Deseado" value="No Deseado">No Deseado</option>
							<option name="Controlado" value="Controlado">Controlado</option>
							<option name="Anticonceptivos" value="Anticonceptivos">Anticonceptivos</option>
							<option name="Sintomas de Aborto" value="Sintomas de Aborto">Sintomas de Aborto</option>
							<option name="Enfermedades Infecciosas" value="Enfermedades Infecciosas">Enfermedades Infecciosas</option>
							<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
							<option name="Vomitos" value="Vomitos" selected>Vomitos</option>
							<option name="Otros" value="Otros">Otros</option>

						@else
							<option name="Deseado" value="Deseado">Deseado</option>
							<option name="No Deseado" value="No Deseado">No Deseado</option>
							<option name="Controlado" value="Controlado">Controlado</option>
							<option name="Anticonceptivos" value="Anticonceptivos">Anticonceptivos</option>
							<option name="Sintomas de Aborto" value="Sintomas de Aborto">Sintomas de Aborto</option>
							<option name="Enfermedades Infecciosas" value="Enfermedades Infecciosas">Enfermedades Infecciosas</option>
							<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
							<option name="Vomitos" value="Vomitos">Vomitos</option>
							<option name="Otros" value="Otros" selected>Otros</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="tipo_parto">Tipo de Parto</label>
					<select name="tipo_parto" class="form-control">
						@if($antecedentes->tipo_parto=='Rapido')
							<option name="Rapido" value="Rapido" selected>Rapido</option>
							<option name="Lento" value="Lento">Lento</option>
							<option name="Normal" value="Normal">Normal</option>
							<option name="Inducido" value="Inducido">Inducido</option>
							<option name="Mecanico" value="Mecanico">Mecanico</option>
							<option name="Cesaria" value="Cesaria">Cesaria</option>
							<option name="Presentacion Encefalica" value="Presentacion Encefalica">Presentacion Encefalica</option>
							<option name="Podalico de Nalgas" value="Podalico de Nalgas">Podalico de Nalgas</option>
							<option name="Circular del Cordon" value="Circular del Cordon">Circular del Cordon</option>
							<option name="Llanto al Nacer" value="Llanto al Nacer">Llanto al Nacer</option>

						@elseif($antecedentes->tipo_parto=='Lento')
							<option name="Rapido" value="Rapido" >Rapido</option>
							<option name="Lento" value="Lento" selected="">Lento</option>
							<option name="Normal" value="Normal">Normal</option>
							<option name="Inducido" value="Inducido">Inducido</option>
							<option name="Mecanico" value="Mecanico">Mecanico</option>
							<option name="Cesaria" value="Cesaria">Cesaria</option>
							<option name="Presentacion Encefalica" value="Presentacion Encefalica">Presentacion Encefalica</option>
							<option name="Podalico de Nalgas" value="Podalico de Nalgas">Podalico de Nalgas</option>
							<option name="Circular del Cordon" value="Circular del Cordon">Circular del Cordon</option>
							<option name="Llanto al Nacer" value="Llanto al Nacer">Llanto al Nacer</option>

						@elseif($antecedentes->tipo_parto=='Normal')
							<option name="Rapido" value="Rapido" >Rapido</option>
							<option name="Lento" value="Lento">Lento</option>
							<option name="Normal" value="Normal" selected>Normal</option>
							<option name="Inducido" value="Inducido">Inducido</option>
							<option name="Mecanico" value="Mecanico">Mecanico</option>
							<option name="Cesaria" value="Cesaria">Cesaria</option>
							<option name="Presentacion Encefalica" value="Presentacion Encefalica">Presentacion Encefalica</option>
							<option name="Podalico de Nalgas" value="Podalico de Nalgas">Podalico de Nalgas</option>
							<option name="Circular del Cordon" value="Circular del Cordon">Circular del Cordon</option>
							<option name="Llanto al Nacer" value="Llanto al Nacer">Llanto al Nacer</option>

						@elseif($antecedentes->tipo_parto=='Inducido')
							<option name="Rapido" value="Rapido" >Rapido</option>
							<option name="Lento" value="Lento">Lento</option>
							<option name="Normal" value="Normal">Normal</option>
							<option name="Inducido" value="Inducido" selected>Inducido</option>
							<option name="Mecanico" value="Mecanico">Mecanico</option>
							<option name="Cesaria" value="Cesaria">Cesaria</option>
							<option name="Presentacion Encefalica" value="Presentacion Encefalica">Presentacion Encefalica</option>
							<option name="Podalico de Nalgas" value="Podalico de Nalgas">Podalico de Nalgas</option>
							<option name="Circular del Cordon" value="Circular del Cordon">Circular del Cordon</option>
							<option name="Llanto al Nacer" value="Llanto al Nacer">Llanto al Nacer</option>

						@elseif($antecedentes->tipo_parto=='Mecanico')
							<option name="Rapido" value="Rapido" >Rapido</option>
							<option name="Lento" value="Lento">Lento</option>
							<option name="Normal" value="Normal">Normal</option>
							<option name="Inducido" value="Inducido">Inducido</option>
							<option name="Mecanico" value="Mecanico" selected>Mecanico</option>
							<option name="Cesaria" value="Cesaria">Cesaria</option>
							<option name="Presentacion Encefalica" value="Presentacion Encefalica">Presentacion Encefalica</option>
							<option name="Podalico de Nalgas" value="Podalico de Nalgas">Podalico de Nalgas</option>
							<option name="Circular del Cordon" value="Circular del Cordon">Circular del Cordon</option>
							<option name="Llanto al Nacer" value="Llanto al Nacer">Llanto al Nacer</option>
						
						@elseif($antecedentes->tipo_parto=='Cesaria')
							<option name="Rapido" value="Rapido" >Rapido</option>
							<option name="Lento" value="Lento">Lento</option>
							<option name="Normal" value="Normal">Normal</option>
							<option name="Inducido" value="Inducido">Inducido</option>
							<option name="Mecanico" value="Mecanico">Mecanico</option>
							<option name="Cesaria" value="Cesaria" selected>Cesaria</option>
							<option name="Presentacion Encefalica" value="Presentacion Encefalica">Presentacion Encefalica</option>
							<option name="Podalico de Nalgas" value="Podalico de Nalgas">Podalico de Nalgas</option>
							<option name="Circular del Cordon" value="Circular del Cordon">Circular del Cordon</option>
							<option name="Llanto al Nacer" value="Llanto al Nacer">Llanto al Nacer</option>
						
						@elseif($antecedentes->tipo_parto=='Presentacion Encefalica')
							<option name="Rapido" value="Rapido" >Rapido</option>
							<option name="Lento" value="Lento">Lento</option>
							<option name="Normal" value="Normal">Normal</option>
							<option name="Inducido" value="Inducido">Inducido</option>
							<option name="Mecanico" value="Mecanico">Mecanico</option>
							<option name="Cesaria" value="Cesaria">Cesaria</option>
							<option name="Presentacion Encefalica" value="Presentacion Encefalica" selected>Presentacion Encefalica</option>
							<option name="Podalico de Nalgas" value="Podalico de Nalgas">Podalico de Nalgas</option>
							<option name="Circular del Cordon" value="Circular del Cordon">Circular del Cordon</option>
							<option name="Llanto al Nacer" value="Llanto al Nacer">Llanto al Nacer</option>
						
						@elseif($antecedentes->tipo_parto=='Podalico de Nalgas')
							<option name="Rapido" value="Rapido" >Rapido</option>
							<option name="Lento" value="Lento">Lento</option>
							<option name="Normal" value="Normal">Normal</option>
							<option name="Inducido" value="Inducido">Inducido</option>
							<option name="Mecanico" value="Mecanico">Mecanico</option>
							<option name="Cesaria" value="Cesaria">Cesaria</option>
							<option name="Presentacion Encefalica" value="Presentacion Encefalica">Presentacion Encefalica</option>
							<option name="Podalico de Nalgas" value="Podalico de Nalgas" selected>Podalico de Nalgas</option>
							<option name="Circular del Cordon" value="Circular del Cordon">Circular del Cordon</option>
							<option name="Llanto al Nacer" value="Llanto al Nacer">Llanto al Nacer</option>
						
						@elseif($antecedentes->tipo_parto=='Circular del Cordon')
							<option name="Rapido" value="Rapido" >Rapido</option>
							<option name="Lento" value="Lento">Lento</option>
							<option name="Normal" value="Normal">Normal</option>
							<option name="Inducido" value="Inducido">Inducido</option>
							<option name="Mecanico" value="Mecanico">Mecanico</option>
							<option name="Cesaria" value="Cesaria">Cesaria</option>
							<option name="Presentacion Encefalica" value="Presentacion Encefalica">Presentacion Encefalica</option>
							<option name="Podalico de Nalgas" value="Podalico de Nalgas">Podalico de Nalgas</option>
							<option name="Circular del Cordon" value="Circular del Cordon" selected>Circular del Cordon</option>
							<option name="Llanto al Nacer" value="Llanto al Nacer">Llanto al Nacer</option>
						@else
							<option name="Rapido" value="Rapido" >Rapido</option>
							<option name="Lento" value="Lento">Lento</option>
							<option name="Normal" value="Normal">Normal</option>
							<option name="Inducido" value="Inducido">Inducido</option>
							<option name="Mecanico" value="Mecanico">Mecanico</option>
							<option name="Cesaria" value="Cesaria">Cesaria</option>
							<option name="Presentacion Encefalica" value="Presentacion Encefalica">Presentacion Encefalica</option>
							<option name="Podalico de Nalgas" value="Podalico de Nalgas">Podalico de Nalgas</option>
							<option name="Circular del Cordon" value="Circular del Cordon">Circular del Cordon</option>
							<option name="Llanto al Nacer" value="Llanto al Nacer" selected>Llanto al Nacer</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="desarrollo_psicomotor">Desarrollo Psicomotor</label>
					<select name="desarrollo_psicomotor" class="form-control">
						@if($antecedentes->desarrollo_psicomotor=='Fijo la Cabeza')
						<option name="Fijo la Cabeza" value="Fijo la Cabeza" selected>Fijo la Cabeza</option>
						<option name="Se Sento" value="Se Sento">Se Sento</option>
						<option name="Gateo" value="Gateo">Gateo</option>
						<option name="Camino Apoyado" value="Camino Apoyado">Camino Apoyado</option>
						<option name="Camino Solo" value="Camino Solo">Camino Solo</option>
						<option name="Se Vistio Solo" value="Se Vistio Solo">Se Vistio Solo</option>
						<option name="Control de Esfinteres" value="Control de Esfinteres">Control de Esfinteres</option>

						@elseif($antecedentes->desarrollo_psicomotor=='Se Sento')
						<option name="Fijo la Cabeza" value="Fijo la Cabeza">Fijo la Cabeza</option>
						<option name="Se Sento" value="Se Sento" selected>Se Sento</option>
						<option name="Gateo" value="Gateo">Gateo</option>
						<option name="Camino Apoyado" value="Camino Apoyado">Camino Apoyado</option>
						<option name="Camino Solo" value="Camino Solo">Camino Solo</option>
						<option name="Se Vistio Solo" value="Se Vistio Solo">Se Vistio Solo</option>
						<option name="Control de Esfinteres" value="Control de Esfinteres">Control de Esfinteres</option>

						@elseif($antecedentes->desarrollo_psicomotor=='Gateo')
						<option name="Fijo la Cabeza" value="Fijo la Cabeza">Fijo la Cabeza</option>
						<option name="Se Sento" value="Se Sento">Se Sento</option>
						<option name="Gateo" value="Gateo" selected>Gateo</option>
						<option name="Camino Apoyado" value="Camino Apoyado">Camino Apoyado</option>
						<option name="Camino Solo" value="Camino Solo">Camino Solo</option>
						<option name="Se Vistio Solo" value="Se Vistio Solo">Se Vistio Solo</option>
						<option name="Control de Esfinteres" value="Control de Esfinteres">Control de Esfinteres</option>

						@elseif($antecedentes->desarrollo_psicomotor=='Camino Apoyado')
						<option name="Fijo la Cabeza" value="Fijo la Cabeza">Fijo la Cabeza</option>
						<option name="Se Sento" value="Se Sento">Se Sento</option>
						<option name="Gateo" value="Gateo">Gateo</option>
						<option name="Camino Apoyado" value="Camino Apoyado" selected>Camino Apoyado</option>
						<option name="Camino Solo" value="Camino Solo">Camino Solo</option>
						<option name="Se Vistio Solo" value="Se Vistio Solo">Se Vistio Solo</option>
						<option name="Control de Esfinteres" value="Control de Esfinteres">Control de Esfinteres</option>

						@elseif($antecedentes->desarrollo_psicomotor=='Camino Solo')
						<option name="Fijo la Cabeza" value="Fijo la Cabeza">Fijo la Cabeza</option>
						<option name="Se Sento" value="Se Sento">Se Sento</option>
						<option name="Gateo" value="Gateo">Gateo</option>
						<option name="Camino Apoyado" value="Camino Apoyado">Camino Apoyado</option>
						<option name="Camino Solo" value="Camino Solo" selected>Camino Solo</option>
						<option name="Se Vistio Solo" value="Se Vistio Solo">Se Vistio Solo</option>
						<option name="Control de Esfinteres" value="Control de Esfinteres">Control de Esfinteres</option>

						@elseif($antecedentes->desarrollo_psicomotor=='Se Vistio Solo')
						<option name="Fijo la Cabeza" value="Fijo la Cabeza">Fijo la Cabeza</option>
						<option name="Se Sento" value="Se Sento">Se Sento</option>
						<option name="Gateo" value="Gateo">Gateo</option>
						<option name="Camino Apoyado" value="Camino Apoyado">Camino Apoyado</option>
						<option name="Camino Solo" value="Camino Solo">Camino Solo</option>
						<option name="Se Vistio Solo" value="Se Vistio Solo" selected>Se Vistio Solo</option>
						<option name="Control de Esfinteres" value="Control de Esfinteres">Control de Esfinteres</option>

						@else
						<option name="Fijo la Cabeza" value="Fijo la Cabeza">Fijo la Cabeza</option>
						<option name="Se Sento" value="Se Sento">Se Sento</option>
						<option name="Gateo" value="Gateo">Gateo</option>
						<option name="Camino Apoyado" value="Camino Apoyado">Camino Apoyado</option>
						<option name="Camino Solo" value="Camino Solo">Camino Solo</option>
						<option name="Se Vistio Solo" value="Se Vistio Solo">Se Vistio Solo</option>
						<option name="Control de Esfinteres" value="Control de Esfinteres" selected>Control de Esfinteres</option>

						@endif
					</select>
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
					<select name="antecedentes_saludge" class="form-control">
						@if($antecedentes->antecedentes_saludge=='Sarampion')
						<option name="Sarampion" value="Sarampion" selected>Sarampion</option>
						<option name="Rubeola" value="Rubeola">Rubeola</option>
						<option name="Tos Ferina" value="Tos Ferina">Tos Ferina</option>
						<option name="Paperas" value="Paperas">Paperas</option>
						<option name="Lechina" value="Lechina">Lechina</option>
						<option name="Asma" value="Asma">Asma</option>
						<option name="Alergias" value="Alergias">Alergias</option>

						@elseif($antecedentes->antecedentes_saludge=='Rubeola')
						<option name="Sarampion" value="Sarampion">Sarampion</option>
						<option name="Rubeola" value="Rubeola" selected>Rubeola</option>
						<option name="Tos Ferina" value="Tos Ferina">Tos Ferina</option>
						<option name="Paperas" value="Paperas">Paperas</option>
						<option name="Lechina" value="Lechina">Lechina</option>
						<option name="Asma" value="Asma">Asma</option>
						<option name="Alergias" value="Alergias">Alergias</option>

						@elseif($antecedentes->antecedentes_saludge=='Tos Ferina')
						<option name="Sarampion" value="Sarampion">Sarampion</option>
						<option name="Rubeola" value="Rubeola">Rubeola</option>
						<option name="Tos Ferina" value="Tos Ferina" selected>Tos Ferina</option>
						<option name="Paperas" value="Paperas">Paperas</option>
						<option name="Lechina" value="Lechina">Lechina</option>
						<option name="Asma" value="Asma">Asma</option>
						<option name="Alergias" value="Alergias">Alergias</option>

						@elseif($antecedentes->antecedentes_saludge=='Paperas')
						<option name="Sarampion" value="Sarampion">Sarampion</option>
						<option name="Rubeola" value="Rubeola">Rubeola</option>
						<option name="Tos Ferina" value="Tos Ferina">Tos Ferina</option>
						<option name="Paperas" value="Paperas" selected>Paperas</option>
						<option name="Lechina" value="Lechina">Lechina</option>
						<option name="Asma" value="Asma">Asma</option>
						<option name="Alergias" value="Alergias">Alergias</option>

						@elseif($antecedentes->antecedentes_saludge=='Lechina')
						<option name="Sarampion" value="Sarampion">Sarampion</option>
						<option name="Rubeola" value="Rubeola">Rubeola</option>
						<option name="Tos Ferina" value="Tos Ferina">Tos Ferina</option>
						<option name="Paperas" value="Paperas">Paperas</option>
						<option name="Lechina" value="Lechina" selected>Lechina</option>
						<option name="Asma" value="Asma">Asma</option>
						<option name="Alergias" value="Alergias">Alergias</option>

						@elseif($antecedentes->antecedentes_saludge=='Asma')
						<option name="Sarampion" value="Sarampion">Sarampion</option>
						<option name="Rubeola" value="Rubeola">Rubeola</option>
						<option name="Tos Ferina" value="Tos Ferina">Tos Ferina</option>
						<option name="Paperas" value="Paperas">Paperas</option>
						<option name="Lechina" value="Lechina" >Lechina</option>
						<option name="Asma" value="Asma" selected>Asma</option>
						<option name="Alergias" value="Alergias">Alergias</option>

						@else
						<option name="Sarampion" value="Sarampion">Sarampion</option>
						<option name="Rubeola" value="Rubeola">Rubeola</option>
						<option name="Tos Ferina" value="Tos Ferina">Tos Ferina</option>
						<option name="Paperas" value="Paperas">Paperas</option>
						<option name="Lechina" value="Lechina" >Lechina</option>
						<option name="Asma" value="Asma">Asma</option>
						<option name="Alergias" value="Alergias" selected>Alergias</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="antecedentes_saluds">Antecedentes Salud S.</label>
					<select name="antecedentes_saluds" class="form-control">
						@if($antecedentes->antecedentes_saluds=='Meningitis')
						<option name="Meningitis" value="Meningitis" selected>Meningitis</option>
						<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
						<option name="Otitis Cronica" value="Otitis Cronica">Otitis Cronica</option>
						<option name="Traumatismos" value="Traumatismos">Traumatismos</option>
						<option name="Cardiopatias" value="Cardiopatias">Cardiopatias</option>
						<option name="Epilepsia" value="Epilepsia">Epilepsia</option>
						<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->antecedentes_saluds=='Convulsiones')
						<option name="Meningitis" value="Meningitis">Meningitis</option>
						<option name="Convulsiones" value="Convulsiones" selected>Convulsiones</option>
						<option name="Otitis Cronica" value="Otitis Cronica">Otitis Cronica</option>
						<option name="Traumatismos" value="Traumatismos">Traumatismos</option>
						<option name="Cardiopatias" value="Cardiopatias">Cardiopatias</option>
						<option name="Epilepsia" value="Epilepsia">Epilepsia</option>
						<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->antecedentes_saluds=='Otitis Cronica')
						<option name="Meningitis" value="Meningitis">Meningitis</option>
						<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
						<option name="Otitis Cronica" value="Otitis Cronica" selected>Otitis Cronica</option>
						<option name="Traumatismos" value="Traumatismos">Traumatismos</option>
						<option name="Cardiopatias" value="Cardiopatias">Cardiopatias</option>
						<option name="Epilepsia" value="Epilepsia">Epilepsia</option>
						<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->antecedentes_saluds=='Traumatismos')
						<option name="Meningitis" value="Meningitis">Meningitis</option>
						<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
						<option name="Otitis Cronica" value="Otitis Cronica">Otitis Cronica</option>
						<option name="Traumatismos" value="Traumatismos" selected>Traumatismos</option>
						<option name="Cardiopatias" value="Cardiopatias">Cardiopatias</option>
						<option name="Epilepsia" value="Epilepsia">Epilepsia</option>
						<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->antecedentes_saluds=='Cardiopatias')
						<option name="Meningitis" value="Meningitis">Meningitis</option>
						<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
						<option name="Otitis Cronica" value="Otitis Cronica">Otitis Cronica</option>
						<option name="Traumatismos" value="Traumatismos">Traumatismos</option>
						<option name="Cardiopatias" value="Cardiopatias" selected>Cardiopatias</option>
						<option name="Epilepsia" value="Epilepsia">Epilepsia</option>
						<option name="Otros" value="Otros">Otros</option>

						@elseif($antecedentes->antecedentes_saluds=='Epilepsia')
						<option name="Meningitis" value="Meningitis">Meningitis</option>
						<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
						<option name="Otitis Cronica" value="Otitis Cronica">Otitis Cronica</option>
						<option name="Traumatismos" value="Traumatismos">Traumatismos</option>
						<option name="Cardiopatias" value="Cardiopatias">Cardiopatias</option>
						<option name="Epilepsia" value="Epilepsia" selected>Epilepsia</option>
						<option name="Otros" value="Otros">Otros</option>

						@else
						<option name="Meningitis" value="Meningitis">Meningitis</option>
						<option name="Convulsiones" value="Convulsiones">Convulsiones</option>
						<option name="Otitis Cronica" value="Otitis Cronica">Otitis Cronica</option>
						<option name="Traumatismos" value="Traumatismos">Traumatismos</option>
						<option name="Cardiopatias" value="Cardiopatias">Cardiopatias</option>
						<option name="Epilepsia" value="Epilepsia">Epilepsia</option>
						<option name="Otros" value="Otros" selected>Otros</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="personalidad">Personalidad</label>
					<select name="personalidad" class="form-control">
						@if($antecedentes->personalidad=='Sociable')
						<option name="Sociable" value="Sociable" selected>Sociable</option>
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

						@elseif($antecedentes->personalidad=='Llora Mucho')
						<option name="Sociable" value="Sociable">Sociable</option>
						<option name="Llora Mucho" value="Llora Mucho" selected>Llora Mucho</option>
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

						@elseif($antecedentes->personalidad=='Dependiente')
						<option name="Sociable" value="Sociable">Sociable</option>
						<option name="Llora Mucho" value="Llora Mucho">Llora Mucho</option>
						<option name="Dependiente" value="Dependiente" selected>Dependiente</option>
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

						@elseif($antecedentes->personalidad=='Aprensivo')
						<option name="Sociable" value="Sociable">Sociable</option>
						<option name="Llora Mucho" value="Llora Mucho">Llora Mucho</option>
						<option name="Dependiente" value="Dependiente">Dependiente</option>
						<option name="Aprensivo" value="Aprensivo" selected>Aprensivo</option>
						<option name="Teme al Castigo" value="Teme al Castigo">Teme al Castigo</option>
						<option name="Destructivo" value="Destructivo">Destructivo</option>
						<option name="Tiene Fobias" value="Tiene Fobias">Tiene Fobias</option>
						<option name="Timido" value="Timido">Timido</option>
						<option name="Obsesivo" value="Obsesivo">Obsesivo</option>
						<option name="Sensible" value="Sensible">Sensible</option>
						<option name="Apatico" value="Apatico">Apatico</option>
						<option name="Se Concentra" value="Se Concentra">Se Concentra</option>
						<option name="Se Desanima" value="Se Desanima">Se Desanima</option>

						@elseif($antecedentes->personalidad=='Teme al Castigo')
						<option name="Sociable" value="Sociable">Sociable</option>
						<option name="Llora Mucho" value="Llora Mucho">Llora Mucho</option>
						<option name="Dependiente" value="Dependiente">Dependiente</option>
						<option name="Aprensivo" value="Aprensivo">Aprensivo</option>
						<option name="Teme al Castigo" value="Teme al Castigo" selected>Teme al Castigo</option>
						<option name="Destructivo" value="Destructivo">Destructivo</option>
						<option name="Tiene Fobias" value="Tiene Fobias">Tiene Fobias</option>
						<option name="Timido" value="Timido">Timido</option>
						<option name="Obsesivo" value="Obsesivo">Obsesivo</option>
						<option name="Sensible" value="Sensible">Sensible</option>
						<option name="Apatico" value="Apatico">Apatico</option>
						<option name="Se Concentra" value="Se Concentra">Se Concentra</option>
						<option name="Se Desanima" value="Se Desanima">Se Desanima</option>

						@elseif($antecedentes->personalidad=='Destructivo')
						<option name="Sociable" value="Sociable">Sociable</option>
						<option name="Llora Mucho" value="Llora Mucho">Llora Mucho</option>
						<option name="Dependiente" value="Dependiente">Dependiente</option>
						<option name="Aprensivo" value="Aprensivo">Aprensivo</option>
						<option name="Teme al Castigo" value="Teme al Castigo">Teme al Castigo</option>
						<option name="Destructivo" value="Destructivo" selected>Destructivo</option>
						<option name="Tiene Fobias" value="Tiene Fobias">Tiene Fobias</option>
						<option name="Timido" value="Timido">Timido</option>
						<option name="Obsesivo" value="Obsesivo">Obsesivo</option>
						<option name="Sensible" value="Sensible">Sensible</option>
						<option name="Apatico" value="Apatico">Apatico</option>
						<option name="Se Concentra" value="Se Concentra">Se Concentra</option>
						<option name="Se Desanima" value="Se Desanima">Se Desanima</option>

						@elseif($antecedentes->personalidad=='Tiene Fobias')
						<option name="Sociable" value="Sociable">Sociable</option>
						<option name="Llora Mucho" value="Llora Mucho">Llora Mucho</option>
						<option name="Dependiente" value="Dependiente">Dependiente</option>
						<option name="Aprensivo" value="Aprensivo">Aprensivo</option>
						<option name="Teme al Castigo" value="Teme al Castigo">Teme al Castigo</option>
						<option name="Destructivo" value="Destructivo">Destructivo</option>
						<option name="Tiene Fobias" value="Tiene Fobias" selected>Tiene Fobias</option>
						<option name="Timido" value="Timido">Timido</option>
						<option name="Obsesivo" value="Obsesivo">Obsesivo</option>
						<option name="Sensible" value="Sensible">Sensible</option>
						<option name="Apatico" value="Apatico">Apatico</option>
						<option name="Se Concentra" value="Se Concentra">Se Concentra</option>
						<option name="Se Desanima" value="Se Desanima">Se Desanima</option>

						@elseif($antecedentes->personalidad=='Timido')
						<option name="Sociable" value="Sociable">Sociable</option>
						<option name="Llora Mucho" value="Llora Mucho">Llora Mucho</option>
						<option name="Dependiente" value="Dependiente">Dependiente</option>
						<option name="Aprensivo" value="Aprensivo">Aprensivo</option>
						<option name="Teme al Castigo" value="Teme al Castigo">Teme al Castigo</option>
						<option name="Destructivo" value="Destructivo">Destructivo</option>
						<option name="Tiene Fobias" value="Tiene Fobias">Tiene Fobias</option>
						<option name="Timido" value="Timido" selected>Timido</option>
						<option name="Obsesivo" value="Obsesivo">Obsesivo</option>
						<option name="Sensible" value="Sensible">Sensible</option>
						<option name="Apatico" value="Apatico">Apatico</option>
						<option name="Se Concentra" value="Se Concentra">Se Concentra</option>
						<option name="Se Desanima" value="Se Desanima">Se Desanima</option>

						@elseif($antecedentes->personalidad=='Obsesivo')
						<option name="Sociable" value="Sociable">Sociable</option>
						<option name="Llora Mucho" value="Llora Mucho">Llora Mucho</option>
						<option name="Dependiente" value="Dependiente" >Dependiente</option>
						<option name="Aprensivo" value="Aprensivo">Aprensivo</option>
						<option name="Teme al Castigo" value="Teme al Castigo">Teme al Castigo</option>
						<option name="Destructivo" value="Destructivo">Destructivo</option>
						<option name="Tiene Fobias" value="Tiene Fobias">Tiene Fobias</option>
						<option name="Timido" value="Timido">Timido</option>
						<option name="Obsesivo" value="Obsesivo" selected>Obsesivo</option>
						<option name="Sensible" value="Sensible">Sensible</option>
						<option name="Apatico" value="Apatico">Apatico</option>
						<option name="Se Concentra" value="Se Concentra">Se Concentra</option>
						<option name="Se Desanima" value="Se Desanima">Se Desanima</option>

						@elseif($antecedentes->personalidad=='Sensible')
						<option name="Sociable" value="Sociable">Sociable</option>
						<option name="Llora Mucho" value="Llora Mucho">Llora Mucho</option>
						<option name="Dependiente" value="Dependiente" >Dependiente</option>
						<option name="Aprensivo" value="Aprensivo">Aprensivo</option>
						<option name="Teme al Castigo" value="Teme al Castigo">Teme al Castigo</option>
						<option name="Destructivo" value="Destructivo">Destructivo</option>
						<option name="Tiene Fobias" value="Tiene Fobias">Tiene Fobias</option>
						<option name="Timido" value="Timido">Timido</option>
						<option name="Obsesivo" value="Obsesivo">Obsesivo</option>
						<option name="Sensible" value="Sensible" selected>Sensible</option>
						<option name="Apatico" value="Apatico">Apatico</option>
						<option name="Se Concentra" value="Se Concentra">Se Concentra</option>
						<option name="Se Desanima" value="Se Desanima">Se Desanima</option>

						@elseif($antecedentes->personalidad=='Apatico')
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
						<option name="Apatico" value="Apatico" selected>Apatico</option>
						<option name="Se Concentra" value="Se Concentra">Se Concentra</option>
						<option name="Se Desanima" value="Se Desanima">Se Desanima</option>

						@elseif($antecedentes->personalidad=='Se Concentra')
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
						<option name="Se Concentra" value="Se Concentra" selected>Se Concentra</option>
						<option name="Se Desanima" value="Se Desanima">Se Desanima</option>

						@else
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
						<option name="Se Desanima" value="Se Desanima" selected>Se Desanima</option>
						@endif
					</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="quejas">Quejas</label>
					<select name="quejas" class="form-control">
						@if($antecedentes->quejas=='Dolor de Cabeza')
						<option name="Dolor de Cabeza" value="Dolor de Cabeza" selected>Dolor de Cabeza</option>
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

						@elseif($antecedentes->quejas=='Mareos')
						<option name="Dolor de Cabeza" value="Dolor de Cabeza">Dolor de Cabeza</option>
						<option name="Mareos" value="Mareos" selected>Mareos</option>
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

						@elseif($antecedentes->quejas=='Vomitos')
						<option name="Dolor de Cabeza" value="Dolor de Cabeza">Dolor de Cabeza</option>
						<option name="Mareos" value="Mareos">Mareos</option>
						<option name="Vomitos" value="Vomitos" selected>Vomitos</option>
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

						@elseif($antecedentes->quejas=='Falta de Apetito')
						<option name="Dolor de Cabeza" value="Dolor de Cabeza">Dolor de Cabeza</option>
						<option name="Mareos" value="Mareos">Mareos</option>
						<option name="Vomitos" value="Vomitos">Vomitos</option>
						<option name="Falta de Apetito" value="Falta de Apetito" selected>Falta de Apetito</option>
						<option name="Glotoneria" value="Glotoneria">Glotoneria</option>
						<option name="Ecopresis Diurna" value="Ecopresis Diurna">Ecopresis Diurna</option>
						<option name="Enuresis Diurna" value="Enuresis Diurna">Enuresis Diurna</option>
						<option name="Teme a los Animales" value="Teme a los Animales">Teme a los Animales</option>
						<option name="Teme a Examenes" value="Teme a Examenes">Teme a Examenes</option>
						<option name="Teme a Exposiciones" value="Teme a Exposiciones">Teme a Exposiciones</option>
						<option name="Teme a los Maestros" value="Teme a los Maestros">Teme a los Maestros</option>
						<option name="Terror Nocturno" value="Terror Nocturno">Terror Nocturno</option>
						<option name="Teme Quedarse Solo" value="Teme Quedarse Solo">Teme Quedarse Solo</option>

						@elseif($antecedentes->quejas=='Glotoneria')
						<option name="Dolor de Cabeza" value="Dolor de Cabeza">Dolor de Cabeza</option>
						<option name="Mareos" value="Mareos">Mareos</option>
						<option name="Vomitos" value="Vomitos">Vomitos</option>
						<option name="Falta de Apetito" value="Falta de Apetito">Falta de Apetito</option>
						<option name="Glotoneria" value="Glotoneria" selected>Glotoneria</option>
						<option name="Ecopresis Diurna" value="Ecopresis Diurna">Ecopresis Diurna</option>
						<option name="Enuresis Diurna" value="Enuresis Diurna">Enuresis Diurna</option>
						<option name="Teme a los Animales" value="Teme a los Animales">Teme a los Animales</option>
						<option name="Teme a Examenes" value="Teme a Examenes">Teme a Examenes</option>
						<option name="Teme a Exposiciones" value="Teme a Exposiciones">Teme a Exposiciones</option>
						<option name="Teme a los Maestros" value="Teme a los Maestros">Teme a los Maestros</option>
						<option name="Terror Nocturno" value="Terror Nocturno">Terror Nocturno</option>
						<option name="Teme Quedarse Solo" value="Teme Quedarse Solo">Teme Quedarse Solo</option>

						@elseif($antecedentes->quejas=='Ecopresis Diurna')
						<option name="Dolor de Cabeza" value="Dolor de Cabeza">Dolor de Cabeza</option>
						<option name="Mareos" value="Mareos">Mareos</option>
						<option name="Vomitos" value="Vomitos">Vomitos</option>
						<option name="Falta de Apetito" value="Falta de Apetito">Falta de Apetito</option>
						<option name="Glotoneria" value="Glotoneria">Glotoneria</option>
						<option name="Ecopresis Diurna" value="Ecopresis Diurna" selected>Ecopresis Diurna</option>
						<option name="Enuresis Diurna" value="Enuresis Diurna">Enuresis Diurna</option>
						<option name="Teme a los Animales" value="Teme a los Animales">Teme a los Animales</option>
						<option name="Teme a Examenes" value="Teme a Examenes">Teme a Examenes</option>
						<option name="Teme a Exposiciones" value="Teme a Exposiciones">Teme a Exposiciones</option>
						<option name="Teme a los Maestros" value="Teme a los Maestros">Teme a los Maestros</option>
						<option name="Terror Nocturno" value="Terror Nocturno">Terror Nocturno</option>
						<option name="Teme Quedarse Solo" value="Teme Quedarse Solo">Teme Quedarse Solo</option>

						@elseif($antecedentes->quejas=='Enuresis Diurna')
						<option name="Dolor de Cabeza" value="Dolor de Cabeza">Dolor de Cabeza</option>
						<option name="Mareos" value="Mareos">Mareos</option>
						<option name="Vomitos" value="Vomitos">Vomitos</option>
						<option name="Falta de Apetito" value="Falta de Apetito">Falta de Apetito</option>
						<option name="Glotoneria" value="Glotoneria">Glotoneria</option>
						<option name="Ecopresis Diurna" value="Ecopresis Diurna">Ecopresis Diurna</option>
						<option name="Enuresis Diurna" value="Enuresis Diurna" selected>Enuresis Diurna</option>
						<option name="Teme a los Animales" value="Teme a los Animales">Teme a los Animales</option>
						<option name="Teme a Examenes" value="Teme a Examenes">Teme a Examenes</option>
						<option name="Teme a Exposiciones" value="Teme a Exposiciones">Teme a Exposiciones</option>
						<option name="Teme a los Maestros" value="Teme a los Maestros">Teme a los Maestros</option>
						<option name="Terror Nocturno" value="Terror Nocturno">Terror Nocturno</option>
						<option name="Teme Quedarse Solo" value="Teme Quedarse Solo">Teme Quedarse Solo</option>

						@elseif($antecedentes->quejas=='Teme a los Animales')
						<option name="Dolor de Cabeza" value="Dolor de Cabeza">Dolor de Cabeza</option>
						<option name="Mareos" value="Mareos">Mareos</option>
						<option name="Vomitos" value="Vomitos">Vomitos</option>
						<option name="Falta de Apetito" value="Falta de Apetito">Falta de Apetito</option>
						<option name="Glotoneria" value="Glotoneria">Glotoneria</option>
						<option name="Ecopresis Diurna" value="Ecopresis Diurna">Ecopresis Diurna</option>
						<option name="Enuresis Diurna" value="Enuresis Diurna">Enuresis Diurna</option>
						<option name="Teme a los Animales" value="Teme a los Animales" selected>Teme a los Animales</option>
						<option name="Teme a Examenes" value="Teme a Examenes">Teme a Examenes</option>
						<option name="Teme a Exposiciones" value="Teme a Exposiciones">Teme a Exposiciones</option>
						<option name="Teme a los Maestros" value="Teme a los Maestros">Teme a los Maestros</option>
						<option name="Terror Nocturno" value="Terror Nocturno">Terror Nocturno</option>
						<option name="Teme Quedarse Solo" value="Teme Quedarse Solo">Teme Quedarse Solo</option>

						@elseif($antecedentes->quejas=='Teme a Examenes')
						<option name="Dolor de Cabeza" value="Dolor de Cabeza">Dolor de Cabeza</option>
						<option name="Mareos" value="Mareos">Mareos</option>
						<option name="Vomitos" value="Vomitos">Vomitos</option>
						<option name="Falta de Apetito" value="Falta de Apetito">Falta de Apetito</option>
						<option name="Glotoneria" value="Glotoneria">Glotoneria</option>
						<option name="Ecopresis Diurna" value="Ecopresis Diurna">Ecopresis Diurna</option>
						<option name="Enuresis Diurna" value="Enuresis Diurna">Enuresis Diurna</option>
						<option name="Teme a los Animales" value="Teme a los Animales">Teme a los Animales</option>
						<option name="Teme a Examenes" value="Teme a Examenes" selected>Teme a Examenes</option>
						<option name="Teme a Exposiciones" value="Teme a Exposiciones">Teme a Exposiciones</option>
						<option name="Teme a los Maestros" value="Teme a los Maestros">Teme a los Maestros</option>
						<option name="Terror Nocturno" value="Terror Nocturno">Terror Nocturno</option>
						<option name="Teme Quedarse Solo" value="Teme Quedarse Solo">Teme Quedarse Solo</option>

						@elseif($antecedentes->quejas=='Teme a Exposiciones')
						<option name="Dolor de Cabeza" value="Dolor de Cabeza">Dolor de Cabeza</option>
						<option name="Mareos" value="Mareos">Mareos</option>
						<option name="Vomitos" value="Vomitos">Vomitos</option>
						<option name="Falta de Apetito" value="Falta de Apetito">Falta de Apetito</option>
						<option name="Glotoneria" value="Glotoneria">Glotoneria</option>
						<option name="Ecopresis Diurna" value="Ecopresis Diurna">Ecopresis Diurna</option>
						<option name="Enuresis Diurna" value="Enuresis Diurna">Enuresis Diurna</option>
						<option name="Teme a los Animales" value="Teme a los Animales">Teme a los Animales</option>
						<option name="Teme a Examenes" value="Teme a Examenes">Teme a Examenes</option>
						<option name="Teme a Exposiciones" value="Teme a Exposiciones" selected>Teme a Exposiciones</option>
						<option name="Teme a los Maestros" value="Teme a los Maestros">Teme a los Maestros</option>
						<option name="Terror Nocturno" value="Terror Nocturno">Terror Nocturno</option>
						<option name="Teme Quedarse Solo" value="Teme Quedarse Solo">Teme Quedarse Solo</option>

						@elseif($antecedentes->quejas=='Teme a los Maestros')
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
						<option name="Teme a los Maestros" value="Teme a los Maestros" selected>Teme a los Maestros</option>
						<option name="Terror Nocturno" value="Terror Nocturno">Terror Nocturno</option>
						<option name="Teme Quedarse Solo" value="Teme Quedarse Solo">Teme Quedarse Solo</option>

						@elseif($antecedentes->quejas=='Terror Nocturno')
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
						<option name="Terror Nocturno" value="Terror Nocturno" selected>Terror Nocturno</option>
						<option name="Teme Quedarse Solo" value="Teme Quedarse Solo">Teme Quedarse Solo</option>

						@else
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
						<option name="Teme Quedarse Solo" value="Teme Quedarse Solo" selected>Teme Quedarse Solo</option>
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