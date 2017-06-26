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
			{!!Form::model($grupofamiliar,['method'=>'PATCH','route'=>['instituto.grupofamiliar.update',$grupofamiliar->idgrupo_familiar]])!!}
			{{Form::token()}}

			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label>Estudiante</label>
						<select name="iddatos_estudiantes" class="form-control">
							@foreach ($estudiantes as $es)
								@if ($es->iddatos_estudiantes==$grupofamiliar->idgrupo_familiar)
									<option value="{{$es->iddatos_estudiantes}}" selected>{{$es->nombres}}</option>
								@endif
							@endforeach
						</select>
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="estado_padres">Estado de Padres</label>
					<input type="text" name="estado_padres" class="form-control" value="{{$grupofamiliar->estado_padres}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="servicios_basicos">Servicios Basicos</label>
					<input type="text" name="servicios_basicos" class="form-control" value="{{$grupofamiliar->servicios_basicos}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="hermano_nombre">Hermano Nombre</label>
					<input type="text" name="hermano_nombre" class="form-control" value="{{$grupofamiliar->hermano_nombre}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="hermano_apellido">Hermano Apellido</label>
					<input type="text" name="hermano_apellido" class="form-control" value="{{$grupofamiliar->hermano_apellido}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="hermano_edad">Hermano Edad</label>
					<input type="text" name="hermano_edad" class="form-control" value="{{$grupofamiliar->hermano_edad}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="hermano_estudios">Hermano Estudios</label>
					<input type="text" name="hermano_estudios" class="form-control" value="{{$grupofamiliar->hermano_estudios}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="hermano_trabajo">Hermano Trabajo</label>
					<input type="text" name="hermano_trabajo" class="form-control" value="{{$grupofamiliar->hermano_trabajo}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="otros_familiares">Otros Familiares</label>
					<input type="text" name="otros_familiares" class="form-control" value="{{$grupofamiliar->otros_familiares}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="relacion_familiar">Relacion Familiar</label>
					<input type="text" name="relacion_familiar" class="form-control" value="{{$grupofamiliar->relacion_familiar}}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="relacion_hermanos">Relacion Hermano</label>
					<input type="text" name="relacion_hermanos" class="form-control" value="{{$grupofamiliar->relacion_hermanos}}">
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