<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
</head>
<body>
<section>
<h1>Conversor de Moedas v1.0</h1>
<?php

$number = $_GET["enviar"];
$tranformed = round($number / 5.22);
echo "<p>Seus R$ $number equivalem  a US$ $tranformed</p>";
echo "<p><strong>Cotação fixa de R/$ 5,22</strong> Informada diretamente ao Código</p>"
?>
<a href="index.html"><button>Voltar</button></a>
</section>    



</body>
</html>