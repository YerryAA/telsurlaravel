@extends ('layouts.admin')
@section ('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				  	<li class="active"><a href="#list" data-toggle="tab">Listado de Estudiante</a></li>
				  	<li><a href="{{ url('/instituto/grupofamiliar/create') }}">Agregar Relacion Familiar</a></li>
				</ul>
				@include('instituto.grupofamiliar.search')
				<div id="myTabContent" class="tab-content">
				  	<div class="tab-pane fade active in" id="list">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><b>Estudiante</b></th>
										<th><b>Estado de Padres</b></th>
										<th><b>Servicios Basicos</b></th>
										<th><b>Hermano Nombre</b></th>
										<th><b>Hermano Apellido</b></th>
										<th><b>Hermano Edad</b></th>
										<th><b>Hermano Estudios</b></th>
										<th><b>Hermano Trabajo</b></th>
										<th><b>Otros Familiares</b></th>
										<th><b>Relacion Familiar</b></th>
										<th><b>Relacion Hermanos</b></th>	
										<th><b>Actualizar </b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach ($grupofamiliar as $gf)
											<td>{{$gf->nombres}}</td>
											<td>{{$gf->estado_padres}}</td>
											<td>{{$gf->servicios_basicos}}</td>
											<td>{{$gf->hermano_nombre}}</td>
											<td>{{$gf->hermano_apellido}}</td>
											<td>{{$gf->hermano_edad}}</td>
											<td>{{$gf->hermano_estudios}}</td>
											<td>{{$gf->hermano_estudios}}</td>
											<td>{{$gf->otros_familiares}}</td>
											<td>{{$gf->relacion_familiar}}</td>
											<td>{{$gf->relacion_hermanos}}</td>
											<td>
											<a href="{{URL::action('GrupoFamiliarController@edit',$gf->idgrupo_familiar)}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
											</td>
									</tr>
										@endforeach
								</tbody>
							</table>
							{{$grupofamiliar->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection