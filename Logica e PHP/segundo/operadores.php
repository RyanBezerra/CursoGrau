<?php
    // variáveis do tipo Inteiro
    $numero1 = 10;
	$numero2 = 2.50;
	
	// variáveis do tipo ponto flutuante (float)
	$numero3 = 125.40;
	
	//variáveis do tipo String
	$nome = "Helder Vitor Marinho 45 anos";
	
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Variáveis e Operadores</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style></head>

<body bgcolor="#999999" text="#FFFFFF">
<h2>PHP - Lição 2 - Variáveis e Operadores</h2>

<!-- Tabela com exemplos -->
<table width="800" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="400" bgcolor="#666666">Exemplo</td>
    <td width="400" bgcolor="#333333">Resultado</td>
  </tr>
  <tr>
    <td bgcolor="#666666">operação soma</td>
    <td bgcolor="#333333"><?php echo $numero1 + $numero2 ;?></td>
  </tr>
  <tr>
    <td bgcolor="#666666">operação subtração</td>
    <td bgcolor="#333333"><?php echo $numero1 - $numero2 ;?></td>
  </tr>
    <tr>
    <td bgcolor="#666666">operação multiplicação</td>
    <td bgcolor="#333333"><?php echo $numero1 * $numero2 ;?></td>
  </tr>
    <tr>
    <td bgcolor="#666666">operação divisão</td>
    <td bgcolor="#333333"><?php echo $numero1 / $numero2 ;?></td>
  </tr>
</table>

<?php
    $carros = array ("palio", "gol", "fiesta", "celta", "parati", "montana", "vectra");
?>

 <h3>Exemplo de manipulação de Arrays</h3>
 
 <p>
 <?php 
 echo "Listando apenas um carro: " . $carros [3];
 echo "<br>"; 
 echo "<br>"; 
 
 foreach ($carros as $resultado){
	 echo $resultado;
	 echo "<br>";
 }
 ?>
 </p>
</body>
</html>