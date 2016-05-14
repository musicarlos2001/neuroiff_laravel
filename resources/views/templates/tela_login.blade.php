<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login | NeuroIFF</title>

	
	<!-- Latest compiled and minified CSS -->
	
	<link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">

	<!-- Optional theme -->
	
	<link rel="stylesheet" href="{{ url('/assets/css/bootstrap-theme.min.css') }}">
	
	<!-- font-awesome -->
	
	<link rel="stylesheet" href="{{ url('/assets/font-awesome/css/font-awesome.min.css') }}">
	
	<!-- CSS do Site -->	
	<link rel="stylesheet" href="/assets/css/tela_login.css">
	
</head>
<body class="gradiente-cinza">
	<header>
		<h1 class="oculta">Login | NeuroIFF</h1>
	</header>

	<section class="login">
		<div class="topo-login cores">
			<h1 class="titulo-login">Login - Sistema NeuroIFF</h1>			
		</div>
		<div class="conteudo-login">
			<form class="form-padrao">
				<div class="form-group">
					<input type="text" name="email" class="form-control" placeholder="Usuário">
				</div>

				<div class="form-group">
					<input type="text" name="password" class="form-control" placeholder="Senha">
				</div>

				<a href="" class="recuperar-senha" data-toggle="modal" data-target="#recuperarSenha">Esqueceu a Senha?</a>
				
				<input type="submit" name="btn-enviar" value="Entrar" class="btn-padrao">
				
			</form>
		</div>
	</section>

	<!-- Modal Recuperação de Senha-->
<div class="modal fade" id="recuperarSenha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header cores">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title recuperarSenha" id="myModalLabel">Recuperar Senha</h4>
      </div>
      <div class="modal-body">
        <form class="form-padrao">
			<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="E-mail">
			</div>			
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Recuperar</button>
      </div>
    </div>
  </div>
</div>
	
	

	<!-- jquery-1.12.3 -->
	
	<script   src="{{ url('/assets/js/jquery-1.12.3.min.js') }}"></script>


	<!-- Latest compiled and minified JavaScript -->
	
	<script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>

</body>
</html>