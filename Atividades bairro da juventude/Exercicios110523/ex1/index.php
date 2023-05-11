<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
</head>
<body>
<form action="" method="get">

<h1>Calculo de Salário</h1>
<label for="valor por hora">Valor P/ Hora</label>
<input type="number" step="0.010" name="vh">
<br><br>
<label for="Total de Horas">Horas trabalhadas</label>
<input type="number" step="0.010" name="th"> <br><br>
<input type="submit" value="Calcular">


</form>    

<?php 
if (isset($_GET["vh"])) and (isset($_GET["th"])){
$vh = $_GET["vh"];
$total = $_GET["th"];
$salario = $vh*$total;
$inss = $salario*0.075;
//if($salario<=1320.00){
      
//}
if ($salario<1320.01) and ($salario>=2571.29){
    $inss = $salario*0.09;
    $safinal = $salario-$inss;    
}
    
    if(($salario<2571.30) and($salario>=3856.94)){
        $inss = $salario*0.12;
        $safinal = $salario-$inss;
        }
        
        if($salario<=3856.95){
            $inss = $salario*0.14;
            $safinal = $salario-$inss;
            }
           
echo"o Salário é de  R$ $safinal <br> o inss é de  R$ $inss";
}
 



?>


</body>
</html>