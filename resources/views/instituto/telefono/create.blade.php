@extends ('layouts.admin')
@section ('contenido')
@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
	<div class="tab-pane fade in">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-10 col-md-offset-1">
					{!!Form::open(array('url'=>'instituto/telefono','method'=>'POST','autocomplete'=>'off')) !!}
					{{Form::token()}}
					<div class="col-lg-6 col-sm-6">
							<div class="form-group">
								<label>Representante</label>
									<select name="idrepresentantes" class="form-control">
										@foreach ($representantes as $re)
											<option value="{{$re->idrepresentantes}}">{{$re->representantes_nombre}}</option>
										@endforeach
									</select>
							</div>
						</div>
					<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="telefono_uno">Telefono 1</label>
					<input type="text" name="telefono_uno" class="form-control" value="{{old('telefono_uno')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="telefono_dos">Telefono 2</label>
					<input type="text" name="telefono_dos" class="form-control" value="{{old('telefono_dos')}}">
				</div>
			</div>
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<label for="telefono_local">Telefono Local</label>
					<input type="text" name="telefono_local" class="form-control" value="{{old('telefono_local')}}">
				</div>
			</div>
			
			<div class="col-lg-6 col-sm-6">
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
			</div>
				{!!Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection 