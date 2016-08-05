<!DOCTYPE HTML>

<html lang="br" class="no-js">

<head>

<meta charset="utf-8">
<title>Sistema de Registro Criptografado</title>
<link href="../style.css" rel="stylesheet" />

</head>

<body>

<div id="conteudo">

<h1><span class="destaca"><?php echo $_GET["nome"];?></span>, seguem as informações codificadas: </h1>

<div class="borda"></div>

<div class="clear"></div>

<h3>Conteúdo codificado 01</h3>

<p>Info 1: <?php echo $_GET['info1']?></p>


<h3>Conteúdo codificado 02</h3>

<p>Info 2: <?php echo $_GET['info2']?></p>

<div class="borda"></div>

<p>Para decodificar as informações, <a href= <?php $url = "informacoes_decode.php?key=".$_GET['key']; echo "$url"; ?> >clique aqui</a> !</p>

</div>



</body>

</html>
