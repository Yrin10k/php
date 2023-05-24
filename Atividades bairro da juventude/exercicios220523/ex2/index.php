<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Massa Corporal</title>
</head>
<body>
 <main>
     <!--<script>alert('Informe a altura com pontos, ex: 1.75 metros')</script>-->
     <section>
<h1>IMC - Índice de Massa Corporal</h1>
<form action="" method="get">
<label for="peso">Informe Seu Peso</label>
<br><br>
<input type="number" name="peso" id="peso" step="0.01" > KG
<br><br>
<label for="peso">Informe Sua Altura</label>
<br><br>
<input type="number" name="alt" id="altura" step="0.01" > M
<br><br>
<input type="submit" value="Calcular">

</form>
<?php


if(!isset($_GET["peso"]) and empty($_GET["peso"]) or !isset($_GET["alt"]) and empty($_GET["alt"])  ){
    echo"<br>informe os valores acima!";
}

else{
    
$peso=$_GET["peso"];
$altura=$_GET["alt"];
if($peso=="" or $altura==""){
    echo"<br>informe os valores acima!";
    exit;
}
$imc = $peso/($altura*$altura) ;
if($imc<=18.4){$imc = number_format($imc, 1, '.', '');

echo"Seu IMC é de $imc e Voce está abaixo do peso";

}

if($imc>=18.5 and $imc<25){$imc = number_format($imc, 1, '.', '');
    echo"Seu IMC é de $imc e Voce está no Peso Ideal";
    
    }

    if($imc>25.1){$imc = number_format($imc, 1, '.', '');
        echo"Seu IMC é de $imc e Voce está acima do Peso";
        
        }
        
}
?>


     </section>
 </main>
    

</body>
</html>