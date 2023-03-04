<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulários no PHP</title>
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
<h1>Cadastro de Clientes</h1>
<h3>Dados pessoais</h3>
<form method="get" action="processa.php">
<table width="420" border="0" cellspacing="2" cellpadding="1">
  <tr>
    <td width="100" bgcolor="#FFFFCC">Nome:</td>
    <td bgcolor="#DDEEFF"><input type="text" name="nome"></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">Telefone:</td>
    <td bgcolor="#DDEEFF"><input type="text" name="telefone"></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">Empresa:</td>
    <td bgcolor="#DDEEFF"><input type="text" name="empresa"></td>
  </tr>
    <tr>
    <td bgcolor="#FFFFCC">Senha:</td>
    <td bgcolor="#DDEEFF"><input type="password" name="senha"></td>
  </tr>
</table>

<input type="submit" value="Enviar">
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Empresa DeckMais Ltda - Rua dos Sabiás 220 - São Paulo / SP - F: 1234-1234</p>
</body>
</html>