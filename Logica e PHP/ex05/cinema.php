<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cinema</title>
</head>

<body>

<h2>Confira este destaque!</h2>

<?php

$random = rand(1,3);

if($random==1)
{
	$caminho = "cine1.txt";
}

if($random==2)
{
	$caminho = "cine2.txt";
}

if($random==3)
{
	$caminho = "cine3.txt";
}

// Abertura do arquivo
$arquivo = fopen($caminho, "r");

// Leitura das linhas
while(!feof($arquivo))
{
	echo fgets($arquivo) . "<br>";
}
fclose($arquivo)
?>
	

</body>
</html>