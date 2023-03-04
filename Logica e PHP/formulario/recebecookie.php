<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exemplo de Cookies</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;
	font-size: 14px;
}
-->
</style>
</head>
<body>
<h1>Exemplo de como receber o valor de um Cookie</h1>
<h3>Recebendo um cookie no PHP</h3>

<?php
// Recebendoo o valor do cookie
echo $_COOKIE["usuario"];
?>

</body>
</html>