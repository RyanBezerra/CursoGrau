<?php
// Função nomemes
function nomemes ($mes){
	if ($mes == 1){
	return "Janeiro";
}elseif ($mes == 2){
	return "Fevereiro";
}elseif ($mes == 3){
    return "Março";
}elseif ($mes == 4){
	return "Abril";
}elseif ($mes == 5){
    return "Maio";
}elseif ($mes == 6){
	return "Junho";
}elseif ($mes == 7){
    return "Julho";
}elseif ($mes == 8){
	return "Agosto";
}elseif ($mes == 9){
    return "Setembro";
}elseif ($mes == 10){
	return "Outubro";
}elseif ($mes == 11){
    return "Novembro";
}elseif ($mes == 12){
	return "Dezembro";
}
}

// Função dataatual
function dataatual (){
	return date ("d/m/Y");
}

// Função datahoraatual
function datahoraatual (){
	return date ("d/m/Y") . date (" H:m:s");
}

// Função maiuscula
function maiuscula ($texto){
	$texto = ucwords ($texto);
	return $texto;
}

// Função inss
function inss ($salario){
	if ($salario >=0 && $salario <=1024){
		$calculo = 0.08 * $salario;
		return $calculo;
}elseif ($salario >1024 && $salario <=1708){
	$calculo = 0.09 * $salario;
	return $calculo;
}elseif ($salario >1708){
	$calculo = 0.11 * $salario;
	return $calculo;
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercício de Funções</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.borda {
	border: 1px solid #666;
}
-->
</style></head>

<body bgcolor="#CCE6E6">
<h1>Exercícios de funções</h1>
<h2>Exemplos de funções criadas pelo usuário</h2>
<hr />
<table width="940" border="0" cellpadding="0" cellspacing="0" class="borda">
  <tr>
    <td width="200" height="25"><strong>Nome da função</strong></td>
    <td width="300"><strong>Propósito</strong></td>
    <td align="center"><strong>Resultado</strong></td>
  </tr>
  <tr>
    <td height="25">nomemes</td>
    <td>retorna o nome por extenso do mês informado</td>
    <td align="center">
		<?php echo nomemes (4); ?>
	</td>
  </tr>
  <tr>
    <td height="25">dataatual</td>
    <td>retorna a data atual do servidor</td>
    <td align="center">
		<?php echo dataatual(); ?>
	</td>
  </tr>
  <tr>
    <td height="25">datahoraatual</td>
    <td>retorna data e hora atual do servidor</td>
    <td align="center">
		<?php echo datahoraatual(); ?>
	</td>
  </tr>
  <tr>
    <td height="25">maiuscula</td>
    <td>converte a primeira letra de cada palavra em maiúscula</td>
    <td align="center">
		<?php echo maiuscula("alice no país das maravilhas");?>
	</td>
  </tr>
  <tr>
    <td height="25">inss</td>
    <td>retorna o valor do INSS a ser pago, de acordo com o salário informado</td>
    <td align="center">
		<?php $salariofuncionario = 1600;
		echo "Para o salário $salariofuncionario o resultado é: " . inss($salariofuncionario);
		?>
	</td>
  </tr>
</table>
</body>
</html>