<?php
header ("Content-Type: text/html; charset=utf-8");

// $valor = $_GET["item"];
// echo "O valor recebido na variável item é: $valor";

// recebe os valores da URL, usando o Array GET
if (isset($_GET["codproduto"])){
	$produto = $_GET["codproduto"];
}else{
	die("Código do produto é obrigatório");
}

if (isset($_GET["acao"])){
	$acao = $_GET["acao"];
}else{
	die("Código do produto é obrigatório");
}

$produto = $_GET["codproduto"];

// escreve as informações na página
echo "O produto a ser manipulo: " . $produto;
echo "<br>";
echo "A ação a ser tomada com  o produto: " . $acao;
?>
