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

<!-- Recebendo e gravando os dados -->
<?php

include "../conexao.php";


//Recebendo os dados e tratando os mesmos para inserção no banco
$recebeNome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$confereNome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_MAGIC_QUOTES);

$recebeEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//Se o email for válido, ele passa para a segunda parte da verificação
if ($recebeEmail == NULL ) {
echo "<p>Retorne e digite um e-mail válido por favor!";
echo "<p><a href='javascript:history.back();'>Voltar</a></p>";
return false;
}

//Verificação da utilização de algum caractere especial para evitar uma possível invasão sql no banco, possibilitando assim a proteção e integridade dos dados
else if ($confereNome != $recebeNome) {
echo "<p>Você informou o seguinte Nome: <strong>$recebeNome</strong> .</p>";
echo "<p>Por favor, não utilize caracteres especiais (tais como aspas simples ou duplas, assim como barras!) no campo <strong>Nome</strong>.</p>";
echo "<p><a href='javascript:history.back();'>Volte</a> para a página anterior e tente novamente! Obrigado!</p>";
return false;

}

else {

//Criptografando as informações antes de enviá-las ao banco de dados
echo "<h3>Cadastrando informações em nosso banco de dados</h3>";

include "aes.class.php";

// Pode-se usar o password do usuário que está logado no sistema como string
$key = AES::keygen( AES::KEYGEN_128_BITS, "userP455w0rd" ); 

$aes = new AES( $key );

$criptoInfo1 = base64_encode($aes->encrypt( $_POST['info1'] ));
$criptoInfo2 = base64_encode($aes->encrypt( $_POST['info2'] ));


//Agora vamos inserir os dados no banco
$insereDados = mysqli_query($conecta, "INSERT INTO dados (nome, email, info, info2) VALUES ('$confereNome', '$recebeEmail', '$criptoInfo1', '$criptoInfo2')") or die (mysqli_error($conecta));

//URL para a qual o usuário será enviado após ter preenchido todos os campos corretamente
$urlAcesso = "../front-end/informacoes.php?info1=$criptoInfo1&info2=$criptoInfo2&nome=$confereNome&key=$key";


echo "<p>Seu cadastro foi efetuado com sucesso!</p>";
echo "<p>Aguarde enquanto lhe encaminhamos para a página de acesso ao <strong>Conteúdo Exclusivo</strong>!";
echo "<meta http-equiv=\"refresh\" content=\"5;URL=".$urlAcesso."\">";
}

?>

</div>

</body>

</html>