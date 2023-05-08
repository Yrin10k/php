<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizar númeos reais</title>
</head>

<body>
<section>
<?php 
$number = $_GET["number"];
$inteiro = intval($number);
$real = floatval($number);
echo "Analizando o número $number informado pelo Usuário:
<ul>
    
<li>A parte inteira é $inteiro</li>
<li>A parte fracionária do número é </li>

 </ul>
    

    ";




?>
</section>




</body>
</html>