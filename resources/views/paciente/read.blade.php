	@extends('templates.painel2')

	@section('content')

	<h1 class="titulo">Pesquisa de Pacientes</h1>
	<div class="top-header">		
		<a href="{{ url("/paciente/create")}}" class="btn btn-primary">
			<i class="glyphicon glyphicon-file">Cadastrar</i> 
		</a>
	</div>
	

	<table class="table">
		<tr class="titulo-tabela">
			<th>Nº</th>
			<th>Nome</th>
			<th>Prontuário</th>
			<th>Ações</th>
		</tr>

		@forelse($pacientes as $paciente)

		<tr>
			
			<td>{{$i++}}</td>
			<td>{{ $paciente->nome }}</td>
			<td>{{ $paciente->prontuario }}</td>
			<td>
				<a href="{{ url("/paciente/$paciente->id/edit") }}">
				<i class="glyphicon glyphicon-pencil"></i></a> | 

				<a href="{{ url("/paciente/$paciente->id") }}">
					<i class="glyphicon glyphicon-info-sign"></i></a>
			</td>
		</tr>
		
		@empty
		<tr colspan="3">
			<td>Nenhum registro cadastrado</td>
		</tr>

		@endforelse
	</table>
	<span class="paginacao">
		{!! $pacientes->links() !!}
	</span>
	@endsection