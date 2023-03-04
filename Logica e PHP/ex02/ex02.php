<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
$nota = 8;

//Declaração das variáveis
$mensagem = "";
$cor = "";

//Nota verde
if ($nota > 7)
{
	$mensagem = "Aprovado!";
	$cor = "#00cc66";
}

//Nota amarela
if ($nota <= 7)
{
	$mensagem = "Vai para exame final!";
	$cor = "#ffff66";
}

//Nota vermelha
if ($nota < 4)
{
	$mensagem = "Reprovado!";
	$cor = "#ff0000";
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boletim Online</title>
</head>

<body>
	<h1 align="center">Boletim</h1>
	<table align="center" border="1" width="300px">
		<tr bgcolor="#cacaca" align="center"">
			<td>
				Nota
				
			</td>
			<td>
				Situação Final
			</td>
		</tr>
		<tr width="50%" align="center" bgcolor="<?php echo $cor ?>">
			<td>
				<?php echo $nota ?>
			</td>
			<td>
				<?php echo $mensagem ?>
			</td>
		</tr>
	</table>
</body>
</html>