<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
</head>
<body>
<?php 
//Capturando os Dados do Formulário Retroalimentado
$valor1 = $_GET['v1'] ?? 0;
$valor2 = $_GET['v2'] ?? 0;




?>    


<main>
    <h1>SOMADOR DE VALORES</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get"><!--Vai mandar os dados para o próprio Arquivo-->
<label for="v1">Valor 1</label>
<input type="number" name="v1" id="v1" value="<?=$valor1?>">
<?php // Para manter os valores 1 digitados no input?>
<label for="v1">Valor 2</label>
<input type="number" name="v2" id="v2" value="<?=$valor2?>">
<?php // Para manter os valores 2 digitados no input?>
<input type="submit" value="Somar">
    </form>
</main>
<section id="Resultado">
    <h2>Resultado da Soma</h2>
<?php 
$soma = $valor1+$valor2;
echo"A soma dos valores <strong>$valor1</strong> e <strong>$valor2</strong> é igual a <strong>$soma</strong>"
?>

</section>



</body>
</html>