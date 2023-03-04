<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modelo</title>
</head>

<body>

<?php
//strlen
$nome = "Ryan do Nascimento Bezerra";
echo "O nome $nome tem " . strlen ($nome) . " caracteres";

echo "<br>";

//trim
$mensagem = "      Oi, eu gostaria de comprar seus produtos!!            ";
$mensagem = trim ($mensagem);
echo "<input type='text' size='60' value='$mensagem'/>";

echo "<br>";

//strtoupper
$mensagem2 = "pessoal: fazer o backup diariamente";
echo strtoupper ($mensagem2);

echo "<br>";

//strtolower
$registro = "ERRO 1020: O PEDIDO DO CLIENTE EXTRAVIOU";
echo strtolower ($registro);

?>
</body>
</html>