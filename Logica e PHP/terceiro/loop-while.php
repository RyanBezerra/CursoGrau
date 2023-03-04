<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loop - Comando While</title>
</head>

<body>

<?php
$contador = 1;
while ($contador <= 5){
	echo "Estou sendo repetido ($contador)";
	echo "<br>";
	$contador++;
}

$idade = 4;
while ($idade <= 18){
	echo "João tem agora $idade anos";
	echo "<br>";
	$idade++;
}
?>

</body>
</html>