@extends ('layouts.admin')
@section ('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				  	<li class="active"><a href="#list" data-toggle="tab">Listado de Estudiante</a></li>
				  	<li><a href="{{ url('/instituto/tallas/create') }}">Agregar Talla</a></li>
				</ul>
				@include('instituto.tallas.search')
				<div id="myTabContent" class="tab-content">
				  	<div class="tab-pane fade active in" id="list">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><b>Estudiante</b></th>
										<th><b>Talla de Pantalon</b></th>
										<th><b>Talla de Camisa</b></th>
										<th><b>Talla de Zapato</b></th>
										<th><b>Actualizar Asistencia</b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach ($talla as $ta)
											<td>{{$ta->nombres}}</td>
											<td>{{$ta->talla_pantalon}}</td>
											<td>{{$ta->talla_camisa}}</td>
											<td>{{$ta->talla_zapato}}</td>
											<td>
											<a href="{{URL::action('TallasController@edit',$ta->idtallas)}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
											</td>
									</tr>
										@endforeach
								</tbody>
							</table>
							{{$talla->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection