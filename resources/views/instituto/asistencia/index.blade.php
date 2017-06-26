@extends ('layouts.admin')
@section ('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				  	<li class="active"><a href="#list" data-toggle="tab">Listado de Asistencia</a></li>
				  	<li><a href="{{ url('/instituto/asistencia/create') }}">Agregar Asistencia</a></li>
				</ul>
				@include('instituto.asistencia.search')
				<div id="myTabContent" class="tab-content">
				  	<div class="tab-pane fade active in" id="list">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><b>Nombres</b></th>
										<th><b>Hora Entrada</b></th>
										<th><b>Hora Salida</b></th>
										<th><b>Suplente</b></th>
										<th><b>Observacion</b></th>
										<th><b>Retardo</b></th>
										<th><b>Permisos Personal</b></th>
										<th><b>Permisos Justificado</b></th>
										<th><b>Actualizar Asistencia</b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach ($asistencia as $asi)
											<td>{{$asi->empleado}}</td>
											<td>{{$asi->hora_entrada}}</td>
											<td>{{$asi->hora_salida}}</td>
											<td>{{$asi->suplente}}</td>
											<td>{{$asi->observacion}}</td>
											<td>{{$asi->retardo}}</td>
											<td>{{$asi->permiso_personal}}</td>
											<td>{{$asi->permiso_justificado}}</td>
											<td>
											<a href="{{URL::action('AsistenciaController@edit',$asi->idasistencia)}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
											</td>
									</tr>
										@endforeach
								</tbody>
							</table>
							{{$asistencia->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection