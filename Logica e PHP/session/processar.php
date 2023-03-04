<?php
	// Define a codificação do arquivo
	header("Content-Type: text/html; charset=utf-8");
	
	// usuário e senha que são aceitos
	$usuario_aceito = "admin";
	$senha_aceito = "1234";
	
	// recuperando dados do formulário
	if ($_POST["txtUsuario"] == $usuario_aceito && $_POST["txtSenha"]==$senha_aceito){
		
		// inicia a sessão
		session_start();

		// cria a variável de sessão chamada logado
		$_SESSION["logado"] = "logadosucesso";
				
		// redireciona o usuário para a página principal
		header("Location: index.php");
		
	}else{
		
		// destroi a sessão existente
		session_start();
		session_destroy();
		die("Usuário/Senha inválidos");
	}
?>