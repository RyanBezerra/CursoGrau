<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modelo</title>
</head>

<body>

<?php
$esporte = "futebol";
$uf = "SP";

if ($esporte == "futebol"){
	echo "<h1>Bem vindo e confira as novidades para o setor sobre Futebol</h1>";
}

if ($uf == "SP") {
	echo "<h2>Para você do Estado de São Paulo, ofertas imperdíveis!</h2>";
}else {
	echo "<h2>Aproveite nossas ofertas com frete grátis acima de 100 reais</h2>";
}


?>


</body>
</html>