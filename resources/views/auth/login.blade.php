@extends('layouts.app')

@section('content')
<form  role="form" method="POST" action="{{ url('/login') }}" autocomplete="off" class="full-box logInForm">
{{ csrf_field() }}
        <p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
        <p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
        <div class="form-group label-floating">
          <label class="control-label" for="UserEmail">E-mail</label>
           <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
          <p class="help-block">Escribe tú E-mail</p>
        </div>
        <div class="form-group label-floating">
          <label class="control-label" for="UserPass">Contraseña</label>
          <input id="password" type="password" class="form-control" name="password">
          <p class="help-block">Escribe tú contraseña</p>
        </div>
        <div class="form-group text-center">
            <input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger">
        </div>
    </form>
@endsection
