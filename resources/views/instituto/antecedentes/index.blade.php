@extends ('layouts.admin')
@section ('contenido')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				  	<li class="active"><a href="#list" data-toggle="tab">Listado de Estudiante</a></li>
				  	<li><a href="{{ url('/instituto/antecedentes/create') }}">Agregar Antecedentes</a></li>
				</ul>
				@include('instituto.antecedentes.search')
				<div id="myTabContent" class="tab-content">
				  	<div class="tab-pane fade active in" id="list">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><b>Estudiante</b></th>
										<th><b>Tipo de Embarazo</b></th>
										<th><b>Tipo de Parto</b></th>
										<th><b>Desarrollo Psicomotor</b></th>
										<th><b>Desarrollo Lenguaje</b></th>
										<th><b>Primeras Palabras</b></th>
										<th><b>Edad de Primeras P.</b></th>
										<th><b>Antecedentes Salud G.</b></th>
										<th><b>Antecedentes Salud S.</b></th>
										<th><b>Personalidad</b></th>
										<th><b>Quejas</b></th>
										<th><b>Actualizar Asistencia</b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										@foreach ($antecedentes as $an)
											<td>{{$an->nombres}}</td>
											<td>{{$an->tipo_embarazo}}</td>
											<td>{{$an->tipo_parto}}</td>
											<td>{{$an->desarrollo_psicomotor}}</td>
											<td>{{$an->desarrollo_lenguaje}}</td>
											<td>{{$an->primeras_palabras}}</td>
											<td>{{$an->edad_primeraspalabras}}</td>
											<td>{{$an->antecedentes_saludge}}</td>
											<td>{{$an->antecedentes_saluds}}</td>
											<td>{{$an->personalidad}}</td>
											<td>{{$an->quejas}}</td>
											<td>
											<a href="{{URL::action('AntecedentesController@edit',$an->idantecedentes)}}" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
											</td>
									</tr>
										@endforeach
								</tbody>
							</table>
							{{$antecedentes->render()}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection