<?php
header ("Content-Type: text/html; charset=utf-8");

$form_senha = $_POST["senha"];

if (empty($form_senha)){
	echo "A senha está vazia";
	echo "<br>";
	echo "<a href='javascript:history.go(-1)'>Voltar</a>";
	die();
}

$senha_validar = "ss10";
if ($form_senha != $senha_validar){
	echo "Senha incorreta";
	echo "<br>";
	echo "<a href='javascript:history.go(-1)'>Voltar</a>";
	die();
}

$form_nome = htmlspecialchars ($_POST ["nome"]);
$form_fone = htmlspecialchars ($_POST ["telefone"]);
$form_empresa = htmlspecialchars ($_POST ["empresa"]);

echo "O usuário preencheu assim: $form_nome, $form_fone, $form_empresa";
?>