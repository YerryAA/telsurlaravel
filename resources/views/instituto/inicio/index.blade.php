<!DOCTYPE html>
<html lang="es">

<head>
	<title>TelSUR | {{ Auth::user()->name }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{asset('./css/main.css')}}">
</head>

<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">TelSUR
				<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="{{asset('./assets/img/logo.jpeg')}}" alt="UserIcon">
					<br>
					<figcaption class="text-center text-titles">{{ Auth::user()->name }}</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li><a href="{{ url('/logout') }}"><i class="zmdi zmdi-power"></i></a></li>
				</ul>
			</div>
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
					<li>
						<a href="{{ url('/instituto/inicio') }}">
							<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
						</a>
					</li>
			<?php 
					if (\Auth::user()->secretaria || \Auth::user()->administrador) {
				?>


				<!-- SideBar Menu -->
				

					<li>
						<a href="#!" class="btn-sideBar-SubMenu">
							<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
						</a>
						<ul class="list-unstyled full-box">
							<li>
								<a href="{{ url('/instituto/empleado') }}"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Registrar Personal Nuevo</a>
							</li>
							<li>
								<a href="{{ url('/instituto/asistencia') }}"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Asistencia</a>
							</li>
							<li>
								<a href=""><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i> Reporte General</a>
							</li>
						</ul>
					</li>
				

					<?php } ?>
					
					<?php 
						if (\Auth::user()->personalins || \Auth::user()->administrador) {
						?>
							
							<li>
								<a href="#!" class="btn-sideBar-SubMenu">
									<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Inscripciones Estudiantes <i class="zmdi zmdi-caret-down pull-right"></i>
								</a>
								<ul class="list-unstyled full-box">
									<li>
										<a href="{{ url('/instituto/estudiantes') }}"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Estudiante</a>
									</li>
									<li>
										<a href="{{ url('/instituto/antecedentes') }}"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Antecedentes del Estudiante</a>
									</li>
									<li>
										<a href="{{ url('/instituto/direccion') }}"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Direccion del Estudiante</a>
									</li>
									<li>
										<a href="{{ url('/instituto/discapacidades') }}"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Discapacidad del Estudiante</a>
									</li>
									<li>
										<a href="{{ url('/instituto/grupofamiliar') }}"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Grupo Familiar del Estudiante</a>
									</li>
									<li>
										<a href="{{ url('/instituto/tallas') }}"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Tallas del Estudiante</a>
									</li>
									<li>
										<a href="{{ url('/instituto/transporte') }}"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Transporte del Estudiante</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#!" class="btn-sideBar-SubMenu">
									<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Inscripciones Representantes <i class="zmdi zmdi-caret-down pull-right"></i>
								</a>
								<ul class="list-unstyled full-box">

									<li>
										<a href="{{ url('/instituto/representantes') }}"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Representantes</a>
									</li>
									<li>
										<a href="{{ url('/instituto/telefono') }}"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Telefono Representantes</a>
									</li>
									<li>
										<a href="{{ url('/instituto/vivienda') }}"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Vivienda Representantes</a>
									</li>
								</ul>
							</li>
						<?php } ?>


				</ul>
		</div>
	</section>
	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
				<h1 class="text-titles"><center>Bienvenido <small>{{ Auth::user()->name }}</small></center>
					</h1>
			</div>
			<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Personal
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-alt">
						
					</i>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Estudiante
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-face"></i>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					Representante
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-female"></i>
				</div>
			</article>
		</div>
	</section>

	<!--======S cripts -->
	<script src="{{asset('./js/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('./js/sweetalert2.min.js')}}"></script>
	<script src="{{asset('./js/bootstrap.min.js')}}"></script>
	<script src="{{asset('./js/material.min.js')}}"></script>
	<script src="{{asset('./js/ripples.min.js')}}"></script>
	<script src="{{asset('./js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('./js/main.js')}}"></script>
	<script>
		$.material.init();
	</script>
</body>

</html>