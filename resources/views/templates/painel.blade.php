<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $titulo or 'Sistema | NeuroIFF'}}</title>

	
	<!-- Latest compiled and minified CSS -->
	
	<link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">

	<!-- Optional theme -->
	
	<link rel="stylesheet" href="{{ url('/assets/css/bootstrap-theme.min.css') }}">
	
	<!-- font-awesome -->
	
	<link rel="stylesheet" href="{{ url('/assets/font-awesome/css/font-awesome.min.css') }}">
	
	<!-- CSS do Site -->	
	<link rel="stylesheet" href="{{url('css/sistema.css')}}">
	
</head>
<body class="gradiente-azul2">
	<header>
		<h1 class="oculta">Sistema | NeuroIFF</h1>
	</header>

	<section class="painel">		
			<h1 class="oculta">Sistema - Sistema NeuroIFF</h1>			
	
		
		<div class="topo-painel col-md-12">
			<a href="" class="icon-acoes-painel">
				<i class="fa fa-expand" aria-hidden="true"></i>	
			</a>
			<img src="{{url('img/logo_neuroiff.jpg')}}" alt="Logo Sistema NeuroIFF" title="Sistema NeuroIFF">			
			<span class="titulo-painel">NeuroIFF</span> 
			<select name="" id="" class="acoes-painel">
				<option value="">Usuário Logado</option>
				<option class="sair">Sair</option>
			</select>
		</div>
	</section>
		
		<div class="menu-painel col-md-2">
			<ul class="menu-painel-ul">
				<li><i class="fa fa-user-md" aria-hidden="true"></i>
					<a href="">Médicos</a></li>
				<li><i class="fa fa-tachometer" aria-hidden="true"></i>
					<a href="">Dashboard</a></li>
				<li><i class="fa fa-stethoscope" aria-hidden="true"></i><a href="">Consultas</a></li>				
				<li><i class="fa fa-medkit" aria-hidden="true"></i>
					<a href="">Atendimentos</a></li>
				<li><i class="fa fa-user-plus" aria-hidden="true"></i><a href="paciente">Pacientes</a></li>
				<li><i class="fa fa-sign-out" aria-hidden="true"></i><a href="">Sair</a></li>
			</ul>
			
		</div>

		<div class="container col-md-10">
		
		@yield('content')

	</div>

	<div class="col-md-2">
		
	</div>

	
	

	<div class="footer-painel">
		
	</div>

	<!-- jquery-1.12.3 -->
	
	<script   src="{{ url('/assets/js/jquery-1.12.3.min.js') }}"></script>


	<!-- Latest compiled and minified JavaScript -->
	
	<script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>

</body>
</html>