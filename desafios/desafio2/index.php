<!DOCTYPE html>
<html lang="pt-br ">
<head>
<link rel="stylesheet" href="style.css">    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
</head>
<body>

<section>
  
    <?php
    $nradom = rand(1, 100);
    echo "</h1>TRABALHANDO COM GERADOR DE NÚMEROS ALEATORIOS<h1>  
Será gerado um núemro entre 1 e 100
<p>Seu número gerado foi : $nradom</p>

";

    
    
    ?>
<a href="index.php">
    <button>
            Gerar número
        </button>
    
</a>    
    
  
</section>



</body>
</html>