@extends ('layouts.admin')
@section ('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				  	<li class="active"><a href="#list" data-toggle="tab">Listado de Estudiante</a></li>
				  	<li><a href="{{ url('/instituto/direccion/create') }}">Agregar Direccion</a></li>
				</ul>
				@include('instituto.direccion.search')
				<div id="myTabContent" class="tab-content">
				  	<div class="tab-pane fade active in" id="list">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><b>Estudiante</b></th>
										<th><b>Direccion</b></th>
										<th><b>Pais de Nacimiento</b></th>
										<th><b>Estado</b></th>
										<th><b>Nacionalidad<b></th>
										<th><b>Actualizar Asistencia</b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach ($direccion as $di)
											<td>{{$di->nombres}}</td>
											<td>{{$di->direccion}}</td>
											<td>{{$di->pais_nacimiento}}</td>
											<td>{{$di->estado}}</td>
											<td>{{$di->nacionalidad}}</td>
											<td>
											<a href="{{URL::action('DireccionController@edit',$di->iddireccion)}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
											</td>
									</tr>
										@endforeach
								</tbody>
							</table>
							{{$direccion->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection