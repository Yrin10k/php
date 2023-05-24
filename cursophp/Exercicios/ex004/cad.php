<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="style.css">   
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
    <h1>Resultado do Processamento</h1>
    </header>
<main>
<?php 
$n = $_GET["nome"] ?? "Sem nome";
$s = $_GET["sobrenome"] ?? "Desconhecido";
echo "É um prazer te conhecer <strong><em>$n $s</em></strong> ! Este é o meu site."



?>
<a href="javascript:history.go(-1)"> Voltar para pagina anterior</a>

</main>

</body>
</html>