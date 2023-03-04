<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loop - Comando For</title>
</head>

<body>

<?php
for ($salario = 1; $salario <= 10; $salario++){
	echo "Meu salário é de $salario";
	echo "<br>";
}

for ($passos = 1; $passos <= 600; $passos+=70){
	echo "O loop está no passo $passos";
	echo "<br>";
}
?>

</body>
</html>