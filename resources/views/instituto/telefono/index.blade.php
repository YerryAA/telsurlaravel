@extends ('layouts.admin')
@section ('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				  	<li class="active"><a href="#list" data-toggle="tab">Listado de Representantes</a></li>
				  	<li><a href="{{ url('/instituto/telefono/create') }}">Agregar Telefono</a></li>
				</ul>
				@include('instituto.telefono.search')
				<div id="myTabContent" class="tab-content">
				  	<div class="tab-pane fade active in" id="list">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><b>Representantes</b></th>
										<th><b>Telefono 1</b></th>
										<th><b>Telefono 2</b></th>
										<th><b>Telefono Local</b></th>
										<th><b>Actualizar</b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach ($telefono as $te)
											<td>{{$te->nombres}}</td>
											<td>{{$te->telefono_uno}}</td>
											<td>{{$te->telefono_dos}}</td>
											<td>{{$te->telefono_local}}</td>
											<td>
											<a href="{{URL::action('TelefonoController@edit',$te->idtelefono)}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
											</td>
									</tr>
										@endforeach
								</tbody>
							</table>
							{{$telefono->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection