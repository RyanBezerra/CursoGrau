<?php
// Define a codificação do arquivo
header("Content-Type: text/html; charset=utf-8");

// inicia a sessão
session_start();

// Cria ou incrementa a variável existente
if(isset($_SESSION['visitas'])){
	$_SESSION['visitas']++;
}else{
	$_SESSION['visitas']=1;
}

echo "Número de visitas =". $_SESSION['visitas'];
?>