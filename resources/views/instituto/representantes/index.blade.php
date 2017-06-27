@extends ('layouts.admin')
@section ('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				  	<li class="active"><a href="#list" data-toggle="tab">Listado de Representantes</a></li>
				  	<li><a href="{{ url('/instituto/representantes/create') }}">Agregar Representante a un estudiante</a></li>
				</ul>
				@include('instituto.representantes.search')
				<div id="myTabContent" class="tab-content">
				  	<div class="tab-pane fade active in" id="list">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><b>Estudiante</b></th>
										<th><b>Nombres Repre.</b></th>
										<th><b>Apellidos Repre.</b></th>
										<th><b>Cedula Repre.</b></th>
										<th><b>Edad Repre.</b></th>
										<th><b>Fecha de Nacimiento</b></th>
										<th><b>Pais de Nacimiento</b></th>
										<th><b>Nacionalidad</b></th>
										<th><b>Direccion</b></th>
										<th><b>Parentesco</b></th>
										<th><b>Ocupacion</b></th>	
										<th><b>Direcion Laboral</b></th>	
										<th><b>Actualizar </b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach ($representantes as $re)
											<td>{{$re->nombres}}</td>
											<td>{{$re->representantes_nombre}}</td>
											<td>{{$re->representantes_apellido}}</td>
											<td>{{$re->representantes_cedula}}</td>
											<td>{{$re->representantes_edad}}</td>
											<td>{{$re->representantes_fechanacimiento}}</td>
											<td>{{$re->representantes_paisnacimiento}}</td>
											<td>{{$re->representantes_nacionalidad}}</td>
											<td>{{$re->representantes_direccion}}</td>
											<td>{{$re->representantes_parentesco}}</td>
											<td>{{$re->representantes_ocupacion}}</td>
											<td>{{$re->representantes_direcionlaboral}}</td>
											<td>
											<a href="{{URL::action('RepresentantesController@edit',$re->idrepresentantes)}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
											</td>
									</tr>
										@endforeach
								</tbody>
							</table>
							{{$representantes->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection