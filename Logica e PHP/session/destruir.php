<?php
	// Define a codificação do arquivo
	header("Content-Type: text/html; charset=utf-8");
	
	// recupera e destroi a sessão
	session_start();
	session_destroy();
	
	// envia o usuario de volta para a página de login
	header("Location: login.html");
?>