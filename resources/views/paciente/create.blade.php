	@extends('templates.painel')
	
	@section('content')
			
	<div class="top-header">
		<h1 class="titulo">Novo Pacientes</h1>
		<a href="{{ url("/paciente")}}" class="btn btn-success">
			<i class="glyphicon glyphicon-fast-backward"></i> 
		</a>
	</div>
	
	@if( isset($errors) && count($errors)>0)
	<div class="alert alert-danger">
		@foreach( $errors->all() as $error )
			{{ $error }} <br>
		@endforeach
	</div>
	@endif

	<form method="post" action="/paciente" class="form">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		


		Nome: <br><input type="text" name="nome" placeholder="Insira o nome" class="form-control">
		Número Prontuário:<br><input type="text" name="prontuario" placeholder="Insira o prontuário" class="form-control">
		<input type="submit" value="Gravar" class="btn btn-success">
	</form>
@endsection