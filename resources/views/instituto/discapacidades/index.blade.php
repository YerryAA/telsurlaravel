@extends ('layouts.admin')
@section ('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				  	<li class="active"><a href="#list" data-toggle="tab">Listado de Estudiante</a></li>
				  	<li><a href="{{ url('/instituto/discapacidades/create') }}">Agregar Discapacidad</a></li>
				</ul>
				@include('instituto.discapacidades.search')
				<div id="myTabContent" class="tab-content">
				  	<div class="tab-pane fade active in" id="list">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><b>Estudiante</b></th>
										<th><b>Nombre de Discapacidad</b></th>
										<th><b>Convulsiona</b></th>
										<th><b>Alergico</b></th>
										<th><b>Toma Medicamento</b></th>
										<th><b>Actualizar Asistencia</b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach ($discapacidad as $dis)
											<td>{{$dis->nombres}}</td>
											<td>{{$dis->discapacidad_nombre}}</td>
											<td>{{$dis->convulsiona}}</td>
											<td>{{$dis->alergico}}</td>
											<td>{{$dis->toma_medicamento}}</td>
											<td>
											<a href="{{URL::action('DiscapacidadController@edit',$dis->iddiscapacidad)}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
											</td>
									</tr>
										@endforeach
								</tbody>
							</table>
							{{$discapacidad->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection