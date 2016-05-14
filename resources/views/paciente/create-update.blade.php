	<title>Gestão de Pacientes</title>
	@extends('templates.painel2')
	
	@section('content')

	
	<h1 class="titulo">Gestão de Pacientes</h1>
	<div class="top-header navegacao">		
		<a href="{{ url("/paciente/create")}}" class="btn btn-primary">
			<i class="fa fa-floppy-o cadastrar">Cadastrar</i> 
		</a>

		<a href="{{ url("/paciente")}}" class="btn btn-primary">
			<i class="glyphicon glyphicon-search pesquisar">Pesquisar</i> 
		</a>
	</div>
	
	
	@if( isset($errors) && count($errors)>0)
	<div class="alert alert-danger">
		@foreach( $errors->all() as $error )
			{{ $error }} <br>
		@endforeach
	</div>
	@endif
	
	@if(isset($paciente->id))

	<form class="form" method="post" action="/paciente/{{$paciente->id}}">
		<input name="_method" type="hidden"  value="PUT">
	@else
		<form method="post" action="/paciente" class="form">
	@endif
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		

		<div class="form-group">
		Nome: <br><input type="text" name="nome" placeholder="Insira o nome" class="form-control" value="@if(isset($paciente->nome)){{$paciente->nome}}@else{{old('nome')}}@endif">
		</div>
		<div class="form-group">
		Número Prontuário:<br><input type="text" name="prontuario" placeholder="Insira o prontuário" class="form-control" value="@if(isset($paciente->prontuario)){{$paciente->prontuario}}@else{{old('prontuario')}}@endif">
		</div>
		<input type="submit" value="Salvar" class="btn btn-primary">
	</form>
	
@endsection