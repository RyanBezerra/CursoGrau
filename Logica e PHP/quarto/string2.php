<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modelo</title>
</head>

<body>

<?php
//substr
$registro = "Cliente: Paulo Roberto RG: 28332123 CPF: 01001000192";
echo substr ($registro, 0, 22);
echo "<br>";
echo substr ($registro, 23, 12);
echo "<br>";
echo substr ($registro, 36, 16);

echo "<br>";
$cidade = "001 - Sorocaba | 002 - São Paulo";
echo "O cliente mora em " . substr ($cidade, 6, 8);
?>
</body>
</html>