<?php
// Define a codificação do arquivo
header("Content-Type: text/html; charset=utf-8");

// inicia a sessão
session_start();

// escrevendo o valor da variável do tipo Session
echo $_SESSION['visitas'];
?>