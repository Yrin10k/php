<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
  <h1>Imprimir na tela Impares de 1 a 50</h1><br><br><br>
  
  <?php 
for ($i=1; $i <51; $i++) { 
    $a=$i%2;
    if ($a!==0) {
        echo $i, "<br>";
    }else{
        echo "";
    }
}

  ?>
</body> 
</html>