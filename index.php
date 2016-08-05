<!DOCTYPE HTML>

<html lang="br" class="no-js">

<head>

<meta charset="utf-8">
<title>Sistema de Registro Criptografado</title>
<link href="style.css" rel="stylesheet" />

</head>

<body>

<div id="conteudo">

<h1>Sistema de registro criptografado</h1>

<div class="borda"></div>

<form method="post" action="back-end/registra.php" id="registra">
<fieldset>
<legend>Faça seu registo abaixo!</legend>
<label for="nome">Seu nome:</label>
<input type="text" name="nome" id="nome" />
<div class="clear"></div>
<label for="email">E-mail:</label>
<input type="text" name="email" id="email" />
<div class="clear"></div>
<label for="info1">Info 1:</label>
<input type="text" name="info1" id="info1" />
<div class="clear"></div>
<label for="info2">Info 2:</label>
<input type="text" name="info2" id="info2" />
<div class="clear"></div>
<input type="submit" value="Efetuar resgistro" />

</fieldset>
</form>

</div>

</body>

</html>