<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade em Dias</title>
</head><!--style="margin-left:30%; margin-right:30%;"-->
<body>
<main>
    <center>
<section >
<h1>SITE DE IDADE EM DIAS</h1>
<br>
<h2>Informe quantos :</h2>

    <form method="get">
<label for="Anos">Anos:</label>
<br><br>
<input type="number" name="ano">
<br><br>
<label for="meses">Meses:</label>
<br><br>
<input type="number" name="mes">
<br><br>
<label for="dias">Dias:</label>
<br><br>
<input type="number" name="dia">
<br><br>
<input type="submit" value="Calcular" name="calcular">
</form>
<?php 


if(!isset($_GET["ano"]) || empty($_GET["ano"])  or !isset($_GET["mes"]) || empty($_GET["mes"]) or !isset($_GET["dia"]) || empty($_GET["dia"])){
    echo "<br>Não há dados! ";
    exit;
    
}

$ano=$_GET["ano"]*365;
$mes=$_GET["mes"]*30;
$dia=$_GET["dia"];
$total=$ano+$mes+$dia;

echo "<br>
Voce viveu $total dias";

?>


</section></center>
</main>

</body>
</html>