<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Triângulo</title>
</head>
<body>
    <main>
        <center>
        <section>
            <h1>Cálculo da Área do Trinângulo</h1>
            <br><br>
            <form method="get">
<label for="base">Informe a Base</label>
<br><br>
<input type="number" name="base" step="0.0010" id="base">
<br><br>
<label for="base">Informe a Altura</label>
<br><br>
<input type="number" name="altura" step="0.0010" id="altura">
<br><br>
<input type="submit" value="Calcular" name="calcular">
            </form>
<?php 
if(!isset($_GET["base"]) || empty($_GET["base"])  or !isset($_GET["altura"]) || empty($_GET["altura"])){
    echo "<br>Não há dados! ";
    exit;
    
}

$base=$_GET["base"];
$altura=$_GET["altura"];
$area=($base*$altura)/2;

echo "<br><br>A área total é de $area";


?>
            
        </section></center>
    </main>


</body>
</html>