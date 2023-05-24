<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
<?php 
//recebendo dados
if(!isset($_GET["vh"]) || empty($_GET["vh"])  or !isset($_GET["th"]) || empty($_GET["th"])){
echo "Não há Valor! ";
echo "<a href=\"index.html\".go(-1)><button>Voltar</button></a>
";
exit;



} 

if((isset($_GET["vh"]))and(isset($_GET["th"]))){
$vh = $_GET["vh"];
$th = $_GET["th"];
$salario = $vh*$th;

}

 //condicional do calculo de INSS]
if ($salario>=1320.00){
    $inss = $salario*0.075;
    $safinal = $salario-$inss; 

}


if (($salario<1320.01) and($salario>=2571.29)){
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
           
echo"o Salário é de  R$ $salario <br> o inss é de  R$ $inss";

 
?>   
<br><br> 
<a href="index.html"><button>Voltar</button>
</a>

</body>
</html>