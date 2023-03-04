<?php
// Define a codificação do arquivo
header("Content-Type: text/html; charset=utf-8");

$destino = "cliente@empresa.com.br";
$assunto = "Promoção de filmadoras";
$mensagem = "Promoção especial para você que compra conosco sempre!";

$remetente = "promocao@minhaloja.com.br";

$cabecalho = "From: $remetente";
mail($destino, $assunto, $mensagem, $cabecalho);

echo "Email enviado com sucesso!";
?>