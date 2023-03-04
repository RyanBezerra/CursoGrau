<?php
$ninicial = $_POST["txtNumeroInicial"];
$nfinal = $_POST["txtNumeroFinal"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Números Pares</title>
<style type="text/css">
body,td,th {
	color: #006600;
	font-family: "Times New Roman", Times, serif;
}
body {
	background-color: #DEECD5;
	text-align: center;
}
td {
	text-align: center;
}
</style>
</head>

<body>
<h2>Números Pares</h2>
<p>O intervalo informado foi de X a X e os números pares seguem abaixo:</p>
<p><?php for($i=$ninicial; $i<=$nfinal; $i++){
	if ($i % 2 == 0)
	{
		echo $i . "<br>";
	}
}?></p>
</body>
</html>
