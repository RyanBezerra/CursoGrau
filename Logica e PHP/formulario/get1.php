<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exemplo do Array GET</title>
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
<h1>Exemplo do Array $_GET</h1>
<h3>Passando variáveis através de links</h3>

<ul>
<li>Página inicial</li>
<li><a href="getresultado.php?item=produtos">Produtos</a></li>
<li><a href="getresultado.php?item=cursos">Cursos</a></li>
<li><a href="getresultado.php?item=alunos">Alunos</a></li>
<li><a href="getresultado.php?item=contato">Contatos</a></li>
</ul>

<ul>
<li>Notebook Intel</li>
<li><a href="getresultado.php?codproduto=1&acao=comprar">Comprar</a></li>
<li><a href="getresultado.php?codproduto=1&acao=excluir">Excluir</a></li>
<br>
<li>Celular Nokia</li>
<li><a href="getresultado.php?codproduto=2&acao=comprar">Comprar</a></li>
<li><a href="getresultado.php?codproduto=2&acao=excluir">Excluir</a></li>
</ul>
</body>
</html>