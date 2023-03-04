<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de consulta de saldo</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Geneva, sans-serif;
}
-->
</style>
</head>

<body>

<?php
    $nome = "Maria Albertina";
	$idade = "18";
	$profissao = "Secretária";
	$saldo = "150,00";
?>

<h1>Sistema de consulta de saldo</h1>
<h2>Nome da tela</h2>
<h4>Data: Dia - Mes  de Ano</h4>
<hr align="left" width="840" />

<h3>Dados do cliente</h3>

<p>Nome: <?php echo $nome . " - Idade: " . $idade; ?></p>

<p>Profissão:  <?php echo $profissao; ?></p>
<p>Saldo em conta: <?php echo $saldo; ?></p>

</body>
</html>