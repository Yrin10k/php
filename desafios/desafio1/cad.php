<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>

</head>
<body>
<div>

<section>

<h1>Resultado final</h1>
     
<form action="">
    
    <?php
    $n = $_GET["numero"];
    $antecessor = $n-1;
    $sucessor = $n+1;
    echo "<p>Seu número foi : $n</p>
    <p>seu antecessor é $antecessor</p>
    <p>seu sucessor é $sucessor</p>"
    ;
    
    
    ?>
    <button><a href="javascript:history.back()">Voltar</a>
    </button>
    </form>
</section>

   
</div>
</body>
</html>