<?php
// Define a codificação do arquivo
header("Content-Type: text/html; charset=utf-8");

// Parâmetros:
// "a" abre e escreve o texto no final do arquivo (mantém o existente)
// "w" abre, limpa e depois escreve o arquivo

// abrindo o arquivo
$arquivo = fopen("gravar/bloco.txt", "a");

// gravando o arquivo
fwrite($arquivo, "estou gravando no arquivo");

// quebra a linha
fwrite($arquivo, "\r\n");

// hora atual em segundos
$horaatual = date("H:i:s");

// escreve a hora atual
fwrite($arquivo, "- O script foi acessado as: $horaatual");

// quebra de linha
fwrite($arquivo, "\r\n");

// Fecha o arquivo
fclose($arquivo);

echo "Gravado com sucesso!";
?>