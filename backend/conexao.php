<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "troy_prot";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if (!$conexao) {
    echo "Falha na conexao com o Banco de Dados";
}

?>