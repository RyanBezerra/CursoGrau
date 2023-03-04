<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calculadora</title>
</head>

<body>
<h1>Veja abaixo o resultado dos cálculos</h1>

<?php
$numero1 = 21;
$numero2 = 5;

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$divisao = $numero1 / $numero2;
$multiplicacao = $numero1 * $numero2;

echo "Soma: " . $numero1 . " + " . $numero2 . " = " . $soma . "<br>";
echo "Subtração: " . $numero1 . " - " . $numero2 . " = " . $subtracao . "<br>";
echo "Divisão: " . $numero1 . " / " . $numero2 . " = " . $divisao . "<br>";
echo "Multiplicação: " . $numero1 . " * " . $numero2 . " = " . $multiplicacao . "<br>";
?>


</body>
</html>