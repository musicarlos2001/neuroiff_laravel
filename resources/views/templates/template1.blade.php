<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $titulo or 'Template'}}</title>
	
	
	<!-- Latest compiled and minified CSS -->
	
	<link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">

	<!-- Optional theme -->
	
	<link rel="stylesheet" href="{{ url('/assets/css/bootstrap-theme.min.css') }}">
	
	<!-- font-awesome -->
	
	<link rel="stylesheet" href="{{ url('/assets/font-awesome/css/font-awesome.min.css') }}">
	
	<!-- CSS do Site -->
	<link rel="stylesheet" href="{{url("assets/css/template.css")}}">
	
</head>
<body>
	<br>
	<div class="container">
		
		@yield('content')

	</div>
	


	<!-- jquery-1.12.3 -->
	
	<script   src="{{ url('/assets/js/jquery-1.12.3.min.js') }}"></script>


	<!-- Latest compiled and minified JavaScript -->
	
	<script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>

</body>
</html>