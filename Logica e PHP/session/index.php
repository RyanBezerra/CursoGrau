<?php
	// *** checando se o usuário está logado
	
	// inicia a sessão
	session_start();
	
	// checa se a variavel de sessão existe
	if (!isset($_SESSION["logado"])){
		
		// se a variável não existe, mata a aplicação
		session_start();
		session_destroy();
		header("Location: login.html");
	}else{
		
		// se a variável já existe, verifica se logou corretamente
		if ($_SESSION["logado"] != "logadosucesso"){
			session_start();
			session_destroy();
			header("Location: login.html");
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rede Social</title>
<style type="text/css">
<!--
body {
	background-color: #960;
}
body,td,th {
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
}

a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	text-decoration: underline;
	color: #FF0;
}
a:active {
	text-decoration: none;
	color: #FFF;
}
-->
</style></head>

<body>
<h1>Bem vindo ao site da rede social 1.0</h1>
<h3>Esse é um exemplo do curso de PHP</h3>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Se você consegue ler é porque sua <strong>Session</strong> está validada!</p>
<br>
<br>
<a href="destruir.php">[Clique aqui para sair]</a>
</body>
</html>
