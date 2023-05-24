<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <main>
       <section>
           <h1>Peso Ideal</h1><br>
           <form action="" method="get">
<label for="altura">Informe sua Altura</label>
<br>
<input type="number" name="h" id="h" step="0.01">
<br><br>
    <input type="radio" name="op" value="1">Homem 
<br>
<input type="radio" name="op" value="2">Mulher
<br><br>
<input type="submit" value="Calcular">
           </form>
<?php
if(!isset($_GET["h"]) and empty($_GET["h"]) ){
echo"<br>informe os valores acima!";
exit;
}
if($_GET["op"]==1){
$total= (72.7 * $_GET["h"])-58;
    echo"Seu peso ideal é de $total";
}
if($_GET["op"]==2){
    $total= (62.1 * $_GET["h"])-44.7;
        echo"Seu peso ideal é de $total";
    }
    



?>

       </section>
   </main>

</body>
</html>