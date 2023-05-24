<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raio da Circunferência</title>
</head>
<body>
    <main>
       <center> <section>
<h1>Calculo do Raio de uma Circunferência</h1>

<form mathod="get">
<label for="raio">Informe o Raio</label><br><br>
<input type="number" name="raio" step="0.0010" id="raio"><br><br>
<input type="submit" value="Calcular">
</form>
<?php 
if(!isset($_GET["raio"]) || empty($_GET["raio"])){
echo "<br>Não há nenhuma informação! ";
exit;
}

$area=3.14*($_GET["raio"]**2);
echo"<br>A área é $area"

?>


        </section></center>
    </main>

</body>
</html>