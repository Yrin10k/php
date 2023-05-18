<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M/s Para Km/h</title>
</head>
<body>
    <main>
     <center>   <section>
<h1>Metros por Segundo para Km por Hora</h1>
<br>
<form method="get">
<label for="ms">Digite Em M/s</label>
<br><br>
<input type="number" name="ms" step="0.0010" id="ms">
<br><br>
<input type="submit" value="Calcular">


</form>
<?php 
if(!isset($_GET["ms"]) || empty($_GET["ms"])){
    echo "<br>Insira os dados acima! ";
    exit;
    
}

$km=$_GET["ms"]*3.6;

echo"<br> $km Km/h"
?>


        </section></center>
    </main>


</body>
</html>