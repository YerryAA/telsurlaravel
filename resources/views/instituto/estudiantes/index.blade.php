@extends ('layouts.admin')
@section ('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				  	<li class="active"><a href="#list" data-toggle="tab">Listado de Estudiante</a></li>
				  	<li><a href="{{ url('/instituto/estudiantes/create') }}">Agregar Estudiante</a></li>
				</ul>
				@include('instituto.estudiantes.search')
				<div id="myTabContent" class="tab-content">
				  	<div class="tab-pane fade active in" id="list">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><b>Tipo de Inscripción</b></th>
										<th><b>Nombres</b></th>
										<th><b>Apellidos</b></th>
										<th><b>Cedula</b></th>
										<th><b>Genero</b></th>
										<th><b>Fecha de Nacimiento</b></th>
										<th><b>Edad</b></th>
										<th><b>Años de Calificacion</b></th>
										<th><b>Carnet</b></th>
										<th><b>Becado</b></th>
										<th><b>Tipo de Organismo</b></th>
										<th><b>Posee Canaima</b></th>
										<th><b>Lateralidad</b></th>
										<th><b>Orden de Nacimiento</b></th>
										<th><b>Esterilizado</b></th>
										<th><b>Hijos</b></th>
										<th><b>Dieta</b></th>
										<th><b>Actualizar Asistencia</b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach ($datos_estudiantes as $de)
											<td>{{$de->tipoinscripcion}}</td>
											<td>{{$de->nombres}}</td>
											<td>{{$de->apellidos}}</td>
											<td>{{$de->cedula}}</td>
											<td>{{$de->genero}}</td>
											<td>{{$de->fecha_nacimiento}}</td>
											<td>{{$de->edad}}</td>
											<td>{{$de->anos_calificacion}}</td>
											<td>{{$de->carnet}}</td>
											<td>{{$de->becado}}</td>
											<td>{{$de->tipo_organismo}}</td>
											<td>{{$de->posee_canaima}}</td>
											<td>{{$de->lateralidad}}</td>
											<td>{{$de->orden_nacimiento}}</td>
											<td>{{$de->esterilizado}}</td>
											<td>{{$de->hijos}}</td>
											<td>{{$de->dieta}}</td>
											<td>
											<a href="{{URL::action('EstudianteController@edit',$de->iddatos_estudiantes)}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
											</td>
									</tr>
										@endforeach
								</tbody>
							</table>
							{{$datos_estudiantes->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection