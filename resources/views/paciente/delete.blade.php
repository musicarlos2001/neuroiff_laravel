	@extends('templates.painel2')
	
	@section('content')

	<h1 class="titulo">{{$paciente->nome}}</h1>
	<div class="top-header">		
		<a href="{{ url("/paciente/create")}}" class="btn btn-primary">
			<i class="glyphicon glyphicon-file">Cadastrar</i> 
		</a>

		<a href="{{ url("/paciente")}}" class="btn btn-primary">
			<i class="glyphicon glyphicon-search">Pesquisar</i> 
		</a>
	</div>
	

	<div>
		Nome: {{$paciente->nome}} <br>
		Prontuário: {{$paciente->prontuario}}

	</div>
	
	<form class="form" method="post" action="/paciente/{{$paciente->id}}">
		<input name="_method" type="hidden"  value="DELETE">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		

                <input type="submit" value="Deletar" class="btn btn-primary">
	</form>
	
	@endsection