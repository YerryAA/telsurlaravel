@extends ('layouts.admin')
@section ('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				  	<li class="active"><a href="#list" data-toggle="tab">Listado de Estudiante</a></li>
				  	<li><a href="{{ url('/instituto/transporte/create') }}">Agregar Transporte</a></li>
				</ul>
				@include('instituto.transporte.search')
				<div id="myTabContent" class="tab-content">
				  	<div class="tab-pane fade active in" id="list">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><b>Estudiante</b></th>
										<th><b>Transporte Nombre</b></th>
										<th><b>Transporte Cedula</b></th>
										<th><b>Transporte Telefono</b></th>
										<th><b>Transporte Vehiculo</b></th>
										<th><b>Actualizar</b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach ($transporte as $ta)
											<td>{{$ta->nombres}}</td>
											<td>{{$ta->transporte_nombre}}</td>
											<td>{{$ta->transporte_cedula}}</td>
											<td>{{$ta->transporte_telefono}}</td>
											<td>{{$ta->transporte_vehiculo}}</td>
											<td>
											<a href="{{URL::action('TransporteController@edit',$ta->idtransporte)}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
											</td>
									</tr>
										@endforeach
								</tbody>
							</table>
							{{$transporte->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection