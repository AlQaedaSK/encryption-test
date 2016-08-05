<!DOCTYPE HTML>

<html lang="br" class="no-js">

<head>

<meta charset="utf-8">
<title>Sistema de Registro Criptografado</title>
<link href="../style.css" rel="stylesheet" />

</head>

<body>

<div id="conteudo">

<h1>Sistema de registro criptografado</h1>

<div class="borda"></div>


<?php
	$urlAcesso = "exibir_decode.php?key=".$_GET['key'];
	echo "<form method=\"post\" action=".$urlAcesso." id=\"exibir_decode\">";
?>

<fieldset>
<legend>Insira as informações codificadas!</legend>

<label for="criptoInfo1">Info 1:</label>
<input type="text" name="criptoInfo1" id="criptoInfo1" />
<div class="clear"></div>
<label for="criptoInfo2">Info 2:</label>
<input type="text" name="criptoInfo2" id="criptoInfo2" />
<div class="clear"></div>
<input type="submit" value="Decodificar" />

</fieldset>
</form>





</div>

</body>

</html>