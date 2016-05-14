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
	<link rel="stylesheet" href="{{url('css/templates.css')}}">
	
	 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 40%;
      margin: auto;
  }
  </style>
</head>
<body class="">
	<div class="col-md-1"></div>
	<div class="col-md-10 geral degrade2">

	<header class="header degrade">
		<div class="container1">
		<h1 class="oculta">Sistema | NeuroIFF</h1>
		<div class="topo-logo">
			<a href="/home">
			<span class="texto-logo padding-10">NEURO IFF</span>
			<img src="{{url('img/logo-trans.png')}}" alt="Logo Sistema NeuroIFF" title="Sistema NeuroIFF" class="logo">			
			</a>
		</div>
		<nav>
			<ul  class="menu">
                                <div class="btn-group">
                                <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
                                  Pacientes
                                 <span class="caret"></span>
                                 </a>
                                <ul class="dropdown-menu">
                                  <li><a href="/paciente">Pesquisa</a></li>
                                  <li><a href="/paciente/create">Cadastrar</a></li>
                                </ul>
                                </div>
                            
                                <div class="btn-group">
                                <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
                                  Atendimentos
                                 <span class="caret"></span>
                                 </a>
                                <ul class="dropdown-menu">
                                  <li><a href="/paciente">Pesquisa</a></li>
                                  <li><a href="/paciente/create">Cadastrar</a></li>
                                </ul>
                                </div>
                            
                            <div class="btn-group">
                                <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
                                  Relatórios
                                 <span class="caret"></span>
                                 </a>
                                <ul class="dropdown-menu">
                                  <li><a href="/paciente">Pesquisa</a></li>
                                  <li><a href="/paciente/create">Cadastrar</a></li>
                                </ul>
                                </div>
                                <div class="btn-group">
                                <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
                                  Pesquisadores
                                 <span class="caret"></span>
                                 </a>
                                <ul class="dropdown-menu">
                                  <li><a href="/paciente">Pesquisa</a></li>
                                  <li><a href="/paciente/create">Cadastrar</a></li>
                                </ul>
                                </div>
                            
			</ul>
		</nav>
		
	</header>








	<div class="principal">
		
		@yield('content')
		
		
	</div>
	

	<div class="footer1 degrade text-center container">
		<footer class="texto">
			IFF - Instituto Nacional de Saúde da Mulher, da Criança e do Adolescente Fernandes Figueira - Av. Rui Barbosa, 716 - Flamengo - Rio de Janeiro - RJ
			<br>Tel: (21)2554-1700 - Fax: (21)2553-6730 - <a href="http://www.iff.fiocruz.br">http://www.iff.fiocruz.br</a>

		</footer>

	</div>

	
	</div>
	<div class="col-md-1"></div>
	
	<!-- jquery-1.12.3 -->	
	<script   src="{{ url('/assets/js/jquery-1.12.3.min.js') }}"></script>
	<!-- Latest compiled and minified JavaScript -->	
	<script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>

</body>
</html>