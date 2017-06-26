@extends ('layouts.admin')
@section ('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				  	<li class="active"><a href="#list" data-toggle="tab">Listado de Empleados</a></li>
				  	<li><a href="{{ url('/instituto/empleado/create') }}">Nuevo Empleado</a></li>
				</ul>
				@include('instituto.empleado.search')
				<div id="myTabContent" class="tab-content">
				  	<div class="tab-pane fade active in" id="list">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><b>Nombres</b></th>
										<th><b>Apellidos</b></th>
										<th><b>Cedula</b></th>
										<th><b>Horario</b></th>
										<th><b>Estatus</b></th>
										<th><b>Cargo</b></th>
										<th><b>Actualizar Empleado</b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach ($empleado as $emp)
											<td>{{$emp->empleado_nombre}}</td>
											<td>{{$emp->empleado_apellido}}</td>
											<td>{{$emp->empleado_cedula}}</td>
											<td>{{$emp->empleado_horario}}</td>
											<td>{{$emp->empleado_estatus}}</td>
											<td>{{$emp->empleado_cargo}}</td>
											<td>
											<a href="{{URL::action('EmpleadoController@edit',$emp->idempleado)}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
											</td>
									</tr>
										@endforeach
								</tbody>
							</table>
							{{$empleado->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection