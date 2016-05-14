

colocar na página home uma classe para gravação de acesso(Acesso) 
e persistir numa tabela acessos - para saber quem acessou a página
        {{$ip = $_SERVER['REMOTE_ADDR']}}
        {{$date = date('Y-m-d')}}
        {{$time = date('Hms')}}