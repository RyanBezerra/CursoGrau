<?php 

// Define a codificação do arquivo
header("Content-Type: text/html; charset=utf-8");

// Diretório para onde o arquivo será enviado
$diretorio = "uploads";

// Testando a extensão do arquivo
$ext = strrchr($_FILES["objetoarquivo"]["name"], ".");
if ($ext != ".jpg"){
	die('Extensão de arquivo não permitida');
}

// Ajustando o nome para o arquivo
$diretorio = $diretorio . "/" . basename($_FILES["objetoarquivo"]["name"]);
/*
// Movendo o arquivo para o diretório de destino
if(move_uploaded_file($_FILES["objetoarquivo"]["tmp_name"], $diretorio)){
	echo "O arquivo " . basename( $_FILES['objetoarquivo']['name']) . " foi enviado ao servidor!";
} else {
	echo "Ocorreu um erro ao enviar o arquivo!";
}
/*
?>