<?php

$host = "localhost";
$loga = "root";
$senhaLoga = "";
$baseDados = "encryption-test";

$conecta = mysqli_connect($host, $loga, $senhaLoga, $baseDados);
$conectaBanco = mysqli_select_db($conecta, $baseDados);

if ($conecta && $conectaBanco){
echo "Parabens!! A conexão ao banco de dados ocorreu normalmente!";
} else {
echo "Nao foi possivel conectar ao banco MSSQL";
}

?>