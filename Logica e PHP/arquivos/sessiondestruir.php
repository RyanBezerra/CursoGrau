<?php
// Define a codificação do arquivo
header("Content-Type: text/html; charset=utf-8");

session_start();
session_destroy();

echo "Sessão destruída";
?>