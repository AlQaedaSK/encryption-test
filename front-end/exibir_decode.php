<!DOCTYPE HTML>

<html lang="br" class="no-js">

<head>

<meta charset="utf-8">
<title>Sistema de Registro Criptografado</title>
<link href="../style.css" rel="stylesheet" />

</head>

<body>

<div id="conteudo">

<h1>Seguem as informações decodificadas: </h1>

<div class="borda"></div>

<div class="clear"></div>

<h3>Conteúdo decodificado 01</h3>

<?php
include "../back-end/aes.class.php";

$aes = new AES( $_GET['key'] );

// Decodificando a string.
$decode1 = $aes->decrypt( base64_decode($_POST['criptoInfo1']) );
$decode2 = $aes->decrypt( base64_decode($_POST['criptoInfo2']) );

echo "<p>Info 1: $decode1</p>
<h3>Conteúdo decodificado 02</h3>
<p>Info 2: $decode2</p>";

?>

<div class="borda"></div>


</div>



</body>

</html>
