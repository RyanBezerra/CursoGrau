<?php
$mensagem_erro [0] = "O email preenchido está inválido";
$mensagem_erro [1] = "A senha digitada năo está correta";
$mensagem_erro [2] = "O CPF informado está inválido";
$mensagem_erro [3] = "Problemas em nosso servidor. Tente mais tarde.";
$mensagem_erro [4] = "Existem muitos usuários no momento. Aguarde 10 minutos.";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ExercĂ­cio de Arrays</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.erro_titulo {
	font-size: 16px;
	color: #FFF;
}
.erro_descricao {
	font-size: 24px;
}
.borda_tabela {
	border: 1px solid #333;
}
-->
</style></head>

<body bgcolor="#EAEAEA">
<br />
<br />
<table width="740" border="0" align="center" cellpadding="0" cellspacing="0" class="borda_tabela" id="tabela_mensagem">
  <tr>
    <td height="40" align="center" bgcolor="#990000" class="erro_titulo">Nosso sistema encontrou o seguinte erro:</td>
  </tr>
  <tr>
    <td height="100" align="center" bgcolor="#FFFFFF" class="erro_descricao"><?php echo $mensagem_erro[0]; ?></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF">Entre em contato com nosso suporte para solucionar o problema</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>

</body>
</html>
