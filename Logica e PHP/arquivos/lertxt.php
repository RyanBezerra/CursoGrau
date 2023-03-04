<?php
// Define a codificação do arquivo
header("Content-Type: text/html; charset=utf-8");
// Lendo um arquivo texto: Linha por Linha

$arquivo = fopen("ler/curiosidades.txt", "r");

while(!feof($arquivo))
{
	// ler a linha completa
	echo fgets($arquivo). "<br>";
	
	// ler através de posições de caractere na linha
	//echo substr(fgets($arquivo), 0, 12) . "<br>";
}
fclose($arquivo);
?>