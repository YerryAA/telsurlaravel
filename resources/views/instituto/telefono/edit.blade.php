@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-6">
			<h3>Editar Representante:</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			{!!Form::model($telefono,['method'=>'PATCH','route'=>['instituto.telefono.update',$telefono->idtelefono]])!!}
			{{Form::token()}}

			
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="telefono_uno">Telefono Uno</label>
					<input type="text" name="telefono_uno" class="form-control" value="{{$telefono->telefono_uno}}" pattern="[0-9]{1,11}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="telefono_dos">Telefono Dos</label>
					<input type="text" name="telefono_dos" class="form-control" value="{{$telefono->telefono_dos}}" pattern="[0-9]{1,11}">
				</div>
			</div>
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<label for="telefono_local">Telefono Local</label>
					<input type="text" name="telefono_local" class="form-control" value="{{$telefono->telefono_local}}" pattern="[0-9]{1,11}">
				</div>
			</div>
			
			<div class="col-lg-12 col-sm-6">
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
			</div>
			
			{{Form::close()}}
		</div>
	</div>	
@endsection