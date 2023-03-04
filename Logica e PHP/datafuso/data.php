<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exemplos com Data e Hora</title>
<style>
body {
	font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
	font-size: 16px;
}
</style>
</head>

<body>

<?php
// Data atual
$dataatual = date ("d/m/Y");
echo $dataatual;

echo "<br>";

// Hora atual sem segundos
$horaatual = date ("H:i");
echo $horaatual;

echo "<br>";

// Hora atual com segundos
$horaatual = date ("H:i:s");
echo $horaatual;

echo "<br>";

echo "Estamos no mês " . date("m") . " do ano " . date ("Y");

echo "<br>";

// Validando uma data 
$dia = "31";
$mes = "12";
$ano = "2010";

if (checkdate ($mes, $dia, $ano)){
	echo "Data válida!";
} else {
	echo "Data inválida!";
}

?>

</body>
</html>